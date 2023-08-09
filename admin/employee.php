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
        Lista del Personal
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li> Personal</li>
        <li class="active"> Personal</li>
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
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Agregar Datos</a>
            </div>           
            <div class="box-body">
              
            <div class="table-responsive">
  <table id="example1" class="table table-hover table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tipo Documento</th>
        <th>Fechas Expedicción</th>
        <th>P_Nombre</th>        
        <th>S_Nombre</th>
        <th>P_Apellido</th>
        <th>Foto</th>
        <th>Acciones</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT *, id AS empid FROM personal";
      $query = $conn->query($sql);
      while ($row = $query->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['numero_documento']; ?></td>
          <td><?php echo $row['fecha_expedicion']; ?></td>
          <td><?php echo $row['primer_nombre']; ?></td>
          <td><?php echo $row['segundo_nombre']; ?></td>
          <td><?php echo $row['primer_apellido']; ?></td>
          <td><img src="<?php echo (!empty($row['foto'])) ? '../images/' . $row['foto'] : '../images/profile.jpg'; ?>" width="100px" height="100px"> <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['empid']; ?>"><span class="fa fa-edit"></span></a></td>
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
  <?php include 'includes/employee_modal.php'; ?>
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


  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#edit_documento').val(response.numero_documento); 
      $('#edit_expedicion').val(response.fecha_expedicion);
      $('#edit_primer').val(response.primer_nombre);
      $('#edit_snombre').val(response.segundo_nombre);
      $('#edit_papellido').val(response.primer_apellido);
      $('#edit_sapellido').val(response.segundo_apellido);
      $('#edit_nacimiento').val(response.fecha_nacimiento);
      $('#edit_edad').val(response.edad);
      $('#edit_estatura').val(response.estatura);
      $('#edit_sangre').val(response.tipo_sangre);
      $('#edit_rh').val(response.factor_rh);
      $('#edit_pais').val(response.pais);
      $('#edit_departamento').val(response.departamento);
      $('#edit_ciudad').val(response.ciudad);
      $('#edit_residencia').val(response.direccion_residencia);
      $('#edit_estado').val(response.	estado_civil);
      $('#edit_email').val(response.email);
      $('#edit_foto').val(response.foto);
    }
  });
}
</script>
</body>
</html>
