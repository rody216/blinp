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
      <h1>
        RNMC - PONAL
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li>Rama Rncm</li>
        <li class="active">Rnmc</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="#rnmc" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
             <!-- Tabla para mostrar los datos de la tabla disciplinarios -->
             <table id="example1" class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Expediente</th>
            <th>Fecha</th>
            <th>Departamento</th>
            <th>Ciudad</th>
            <th>Municipio</th>
            <th>Articulo</th>        
            <th>Acción</th>
          </tr>
            </thead>
            <tbody>
                <?php
                // Suponiendo que ya tienes la conexión a la base de datos en $conn
                $sql = "SELECT *, id AS empid FROM rnmcPonal";
                $query = $conn->query($sql);
                while ($row = $query->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['expediente']; ?></td>
                    <td><?php echo $row['fechaHechos']; ?></td>                    
                    <td><?php echo $row['departamento']; ?></td>
                    <td><?php echo $row['ciudad']; ?></td>
                    <td><?php echo $row['municipio']; ?></td>  
                    <td><?php echo $row['articulo']; ?></td>              
                    <td>
                    <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['empid']; ?>"><i class="fa fa-edit"></i> Editar</button>
                        <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['empid']; ?>"><i class="fa fa-trash"></i> Eliminar</button>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/rnmc_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    $('.empid').val(id);
    getRow(id);
  });

 $('.delete').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#delete').modal('show');
    $('.empid').val(id);
 });
});



function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'rnmc_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#edit_expediente').val(response.expediente);
      $('#edit_fechaHechos').val(response.fechaHechos);
      $('#edit_departamento').val(response.departamento);
      $('#edit_ciudad').val(response.ciudad);
      $('#edit_municipio').val(response.municipio);
      $('#edit_articulo').val(response.articulo);
    }
  });
}
</script>
</body>
</html>
