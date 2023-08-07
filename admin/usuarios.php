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
        Usuarios Administrador
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Usuarios</li>
        <li class="active">Usuarios Administrador</li>
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
               <a href="#usuario" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Crear Nuevo Usuario</a>
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Foto</th>               
                  <th>Acción</th>
                </thead>
                <tbody>
                <?php
                  // Suponiendo que ya tienes la conexión a la base de datos en $conn
                  $sql = "SELECT *, id AS empid  FROM admin";
                  $query = $conn->query($sql);
                  while ($row = $query->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['password']; ?></td>
                      <td><?php echo $row['firstname']; ?></td>
                      <td><?php echo $row['lastname']; ?></td>
                      <td><?php echo $row['photo']; ?></td>
                      <td>
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
  <?php include 'includes/usuario_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
 
  $('.delete').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#delete').modal('show');
    $('.empid').val(id);
});


  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});


</script>
</body>
</html>
