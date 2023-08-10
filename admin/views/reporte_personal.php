<?php
ob_start();
?>

<!doctype html>
<html lang="en">

<head>
  <title>Imprimir datos personales BLI-NP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
 
  <?php include '../includes/header.php'; ?>
</head>

<body>
<?php
include '../../conn.php';
?>

<style>


    /* Estilo para el título de la tabla */
h1 {
  color: blue;
  text-align: center;
  padding: 20px;
}

/* Estilo para los encabezados de columna (th) */
table th {
  color: blue;
  margin-top: 10px;
}

table th,
table td {
  padding-left: 5px;
  margin-top: 10px;
}

tr{
  margin-top: 10px;
}


</style>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <h1 class="table-title">Reportes datos personales BLI-NP</h1>
 
  <div class="table-container">
    <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Documento</th>
        <th>Fechas Expedicción</th>
        <th>Nombre</th>
        <th>Apellido</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM personal";
      $query = $conn->query($sql);
      while ($row = $query->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['numero_documento']; ?></td>
          <td><?php echo $row['fecha_expedicion']; ?></td>
          <td><?php echo $row['primer_nombre']; ?></td>
          <td><?php echo $row['primer_apellido']; ?></td>
         
         
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
<?php
$html=ob_get_clean();
//echo $html;
require_once '../../libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$option = $dompdf ->getOptions();
$option->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($option);
$dompdf->loadHtml("$html");
$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream("archivo_pdf", array("Attachment" => false));
?>