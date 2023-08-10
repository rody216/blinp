<?php
ob_start();
?>


<!doctype html>
<html lang="en">

<head>
  <title>Imprimir reporte</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <?php include '../includes/header.php'; ?>
</head>
<style>

    /* Estilo para el título de la tabla */
h1 {
  color: blue;
  text-align: center;
}

/* Estilo para los encabezados de columna (th) */
table th {
  color: blue;
}

table th,
table td {
  padding-left: 5px;
}

/* Estilo para el contenedor de la tabla */
/* Estilo para el contenedor de la tabla */
.table-container {
  background-color: lightgray; /* Cambia el color de fondo según sea necesario */
  border: 1px solid black;
  padding: 20px; /* Añade espacio alrededor del contenido del contenedor */
}


</style>
<body>
<?php
include '../../conn.php';
?>
  <header>

  </header>


<main>
<h1 class="table-title">Reportes datos personales BLI-NP</h1>
 
 <div class="table-container">
   <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Número de Proceso</th>
                        <th>Fecha de Radicación</th>
                        <th>Tipo de Proceso</th>
                        <th>Clase</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Suponiendo que ya tienes la conexión a la base de datos en $conn
                    $sql = "SELECT *, id AS empid FROM ramajudicialprocesos";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['numeroProceso']; ?></td>
                        <td><?php echo $row['fechaRadicacion']; ?></td>
                        <td><?php echo $row['tipoProceso']; ?></td>
                        <td><?php echo $row['clase']; ?></td>
                        <td><?php echo $row['estatus']; ?></td>
                       
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