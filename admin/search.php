
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h2 class="titulo_inicio">Buscar Empleado</h2>

<div class="row g-4">

    <div class="col-xs-12">
        <label for="num_registros" class="col-form-label">Mostrar: </label>
    </div>

    <div class="col-xs-12">
        <select name="num_registros" id="num_registros" class="form-select">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

    <div class="box-body">
        <label for="num_registros" class="col-form-label">Registros </label>
    </div>

    <div class="col-5"></div>

    <div class="col-auto">
        <label for="campo" class="col-form-label"></label>
    </div>
    <div class="col-auto">
        <input type="text" name="campo" id="campo" class="buscar" placeholder="Buscar Empleado">
    </div>
</div>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
           <table class="table table-bordered">
            <thead>
                <th class="sort asc">Num. empleado</th>
                <th class="sort asc">Nombre</th>
                <th class="sort asc">Apellido</th>
                <th class="sort asc">Fecha nacimiento</th>
                <th class="sort asc">Fecha ingreso</th>
                <th class="sort asc">Parestenco</th>
                <th class="sort asc">Delito</th>
                <th class="sort asc">Acciones</th>
            </thead>

            <!-- El id del cuerpo de la tabla. -->
            <tbody id="content">

            </tbody>
        </table>
    </div>
  </div>
 </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <label id="lbl-total"></label>
    </div>

    <div class="col-xs-12" id="nav-paginacion"></div>

    <input type="hidden" id="pagina" value="1">
    <input type="hidden" id="orderCol" value="0">
    <input type="hidden" id="orderType" value="asc">
</div>
</div>
</main>

<script>
/* Llamando a la función getData() */
getData()

/* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
document.getElementById("campo").addEventListener("keyup", function() {
getData()
}, false)
document.getElementById("num_registros").addEventListener("change", function() {
getData()
}, false)


/* Peticion AJAX */
function getData() {
let input = document.getElementById("campo").value
let num_registros = document.getElementById("num_registros").value
let content = document.getElementById("content")
let pagina = document.getElementById("pagina").value
let orderCol = document.getElementById("orderCol").value
let orderType = document.getElementById("orderType").value

if (pagina == null) {
    pagina = 1
}

let url = "./load.php"
let formaData = new FormData()
formaData.append('campo', input)
formaData.append('registros', num_registros)
formaData.append('pagina', pagina)
formaData.append('orderCol', orderCol)
formaData.append('orderType', orderType)

fetch(url, {
        method: "POST",
        body: formaData
    }).then(response => response.json())
    .then(data => {
        content.innerHTML = data.data
        document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
            ' de ' + data.totalRegistros + ' registros'
        document.getElementById("nav-paginacion").innerHTML = data.paginacion
    }).catch(err => console.log(err))
}

function nextPage(pagina){
document.getElementById('pagina').value = pagina
getData()
}

let columns = document.getElementsByClassName("sort")
let tamanio = columns.length
for(let i = 0; i < tamanio; i++){
columns[i].addEventListener("click", ordenar)
}

function ordenar(e){
let elemento = e.target

document.getElementById('orderCol').value = elemento.cellIndex

if(elemento.classList.contains("asc")){
    document.getElementById("orderType").value = "asc"
    elemento.classList.remove("asc")
    elemento.classList.add("desc")
} else {
    document.getElementById("orderType").value = "desc"
    elemento.classList.remove("desc")
    elemento.classList.add("asc")
}

getData()
}

</script>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>

