<?php
require('fpdf/fpdf.php');
include("conexion.php");

$tarimaini = $_POST['tarimaini'];
$tarimafin = $_POST['tarimafin'];

$solicitud = "SELECT productos.codigo,productos.producto,productos.cantidad, papeleta.lote,papeleta.fecha,papeleta.tarimaini,papeleta.tarimafin,turnopersonal.descturno,lider.nombre_lider FROM `papeleta` 
LEFT JOIN productos ON papeleta.codigo=productos.codigo
LEFT JOIN lider ON papeleta.lider=lider.id_lider 
LEFT JOIN turnopersonal ON papeleta.turno=turnopersonal.turno ORDER BY codigo_pap desc limit 1";
    $resultado = mysqli_query($conexion,$solicitud);
    $i=mysqli_num_rows($resultado);
    
class PDF extends FPDF
{
var $col = 0;

function SetCol($col)
{
    // Move position to a column
    $this->col = $col;
    $x = 10+$col*130;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    if($this->col<1)
    {
        // Go to next column
        $this->SetCol($this->col+1);
        $this->SetY(10);
        return false;
    }
    else
    {
        // Regrese a la primera columna y emita un salto de página
        $this->SetCol(0);
        return true;
    }
}
} 
$pdf = new PDF();
$pdf->AddPage('L','Letter');
$pdf->Ln();
while ($fila = mysqli_fetch_array($resultado) ) {

for($tarima=$tarimaini;  $tarima <=$tarimafin ; $tarima++){
    $pdf->SetFont('Times','B',13);
    //$pdf->Rect(6,6,133,90,'D');
    //$pdf->SetXY($posicion_MulticeldaDX,$posicion_MulticeldaDY);
    $pdf->Cell(28,10,'PRODUCTO','TRLB',0,'L');
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(97,10,utf8_decode($fila['producto']),1,1,'C');
    $pdf->SetFont('Times','B',13);
    $pdf->Cell(28,10,'LOTE',1,0,'L');
    $pdf->Cell(97,10,$fila['lote'],1,1,'C');
    $pdf->Cell(28,10,'CANTIDAD',1,0,'L');
    $pdf->Cell(97,10,$fila['cantidad'],1,1,'C');
    $pdf->Cell(28,10,'FECHA',1,0,'L');
    $pdf->Cell(37,10,$fila['fecha'],1,0,'C');
    $pdf->Cell(20,10,'TARIMA',1,0,'C');
    $pdf->Cell(40,10,$tarima,1,1,'C');
    $pdf->Cell(28,10,'IDH',1,0,'L');
    $pdf->Cell(37,10,$fila['codigo'],1,0,'C');
    $pdf->Cell(20,10,'TURNO',1,0,'C');
    $pdf->Cell(40,10,$fila['descturno'],1,1,'C');
    $pdf->SetFont('Times','B',7);
    $pdf->Cell(65,4,'CALIDAD',1,0,'C');
    $pdf->Cell(60,4,'PRODUCCION',1,1,'C');
    $pdf->SetFont('Times','B',5);
    $pdf->Cell(65,27,'Vo.Bo.CC',1,0,'C');
    $pdf->SetFont('Times','B',7);
    $pdf->Cell(60,27,utf8_decode($fila['nombre_lider']),1,1 ,'C');
    $pdf->Ln(7);
}
}
$pdf->Output(); 

mysql_close();


?>