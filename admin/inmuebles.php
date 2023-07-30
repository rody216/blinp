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
        Propiedades Inmuebles
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Familia</li>
        <li class="active">Lista de Familia</li>
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
               <a href="#inmuebles" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
          <table id="example1" class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Ciudad</th>
                <th>Oficina</th>
                <th>Matricula</th>
                <th>Direccion</th>
                <th>Documento</th>
                <th>Fecha de Actualización</th>
                <th>Personas ID</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Suponiendo que ya tienes la conexión a la base de datos en $conn
                $sql = "SELECT * FROM propiedades";
                $query = $conn->query($sql);
                while($row = $query->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['ciudad']; ?></td>
                    <td><?php echo $row['oficina']; ?></td>
                    <td><?php echo $row['matricula']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['documento']; ?></td>
                    <td><?php echo $row['fechaActualizacion']; ?></td>
                    <td><?php echo $row['personas_id']; ?></td>
                    <td>
                      <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Editar</button>
                      <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Eliminar</button>
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
  <?php include 'includes/inmueble_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'inmueble_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#edit_ciudad').val(response.ciudad);
      $('#edit_oficina').val(response.oficina);
      $('#edit_matricula').val(response.matricula);
      $('#edit_direccion').val(response.direccion);
      $('#edit_documento').val(response.documento);
      $('#edit_fechas').val(response.fechaActualizacion);
     
    }
  });
}
</script>
</body>
</html>
