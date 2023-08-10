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
        Formación Académica y Profesional
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li> Formacion</li>
        <li class="active">Formacion Academica</li>
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
               <a href="#formacion" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Institución</th>
                  <th>Nivel</th>
                  <th>Título</th>
                  <th>Fecha de Graduación</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // Suponiendo que ya tienes la conexión a la base de datos en $conn
                  $sql = "SELECT *, id AS empid FROM academicos";
                  $query = $conn->query($sql);
                  while($row = $query->fetch_assoc()){
                ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['institucion']; ?></td>
                    <td><?php echo $row['nivel']; ?></td>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
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
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/formacion_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>

$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    $('.empid').val(id);
    getRow(id)
  });


  $('.delete').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#delete').modal('show');
    $('.empid').val(id);
  });

});

function getRow(id) {
  $.ajax({
    type: 'POST',
    url: 'formation_row.php', // Replace 'formation_row.php' with the correct path to your PHP file
    data: { id: id },
    dataType: 'json',
    success: function (response) {
      // Assuming the response is valid JSON with fields gender, institution, graduation_date, degree_obtained, etc.
      $('#edit_gender').val(response.nivel);
      $('#edit_institution').val(response.institucion);
      $('#graduation_date').val(response.fecha);
      $('#edit_titulo').val(response.titulo);
      // Populate other form fields as needed
    },
    error: function (error) {
      console.error('Error al obtener el registro académico:', error);
    }
  });
}

</script>
</body>
</html>
