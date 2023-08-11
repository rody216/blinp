<?php 

require('../../pdf/fpdf.php');
require('../../conn.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFont('Times','B',20);
    $this->Image('../../images/triangulosrecortados.png',0,0,70); //imagen(archivo, png/jpg || x,y,tamaño)
    $this->setXY(60,15);
    $this->Cell(100,8,'Reporte Judicial Procesos',0,1,'C',0);
    $this->Image('../../images/fondo_blin.png',150,10,80); //imagen(archivo, png/jpg || x,y,tamaño)
    $this->Ln(40);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',10);
    // Número de página
    $this->Cell(170,10,'Todos los derechos reservados',0,0,'C',0);
    $this->Cell(25,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();//hacemos una instancia de la clase
$pdf->AliasNbPages();
$pdf->AddPage();//añade l apagina / en blanco
$pdf->SetMargins(10,10,10);
$pdf->SetAutoPageBreak(true,20);//salto de pagina automatico
$pdf->SetX(15);
$pdf->SetFont('Helvetica','B',15);
$pdf->Cell(10,8,'ID','B',0,'C',0);
$pdf->Cell(60,8,'Radicacion','B',0,'C',0);
$pdf->Cell(30,8,'Proceso','B',0,'C',0);
$pdf->Cell(35,8,'Clase','B',0,'C',0);
$pdf->Cell(50,8,'Estatus','B',1,'C',0);

$pdf->SetFillColor(233, 229, 235);//color de fondo rgb
$pdf->SetDrawColor(61, 61, 61);//color de linea  rgb

$pdf->SetFont('Arial', '', 12);

// Query to retrieve data from the database
$sql = "SELECT *, id AS empid FROM ramajudicialprocesos";
$query = $conn->query($sql);

if ($query->num_rows > 0) {
    // Loop through each row of data and add it to the PDF
    while ($row = $query->fetch_assoc()) {
        $pdf->Ln(0.6);
        $pdf->SetX(15);
        $pdf->Cell(10, 8, $row['id'], 'B', 0, 'C', 1);
        $pdf->Cell(60, 8, $row['numeroProceso'], 'B', 0, 'C', 1);
        $pdf->Cell(30, 8, '$' . $row['fechaRadicacion'], 'B', 0, 'C', 1);
        $pdf->Cell(35, 8, $row['tipoProceso'], 'B', 0, 'C', 1);
        $pdf->Cell(50, 8, $row['clase'], 'B', 0, 'C', 1);
        $pdf->Cell(50, 8, $row['estatus'], 'B', 1, 'C', 1);
    }
} else {
    // Display a message when there are no records
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'No se encontraron registros.', 0, 1, 'C');
}

// Close the database connection
$conn->close();

// Output the PDF
$pdf->Output();
