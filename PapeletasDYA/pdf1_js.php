<?php
require('fpdf/fpdf.php');
include("conexion.php");


$solicitud = "SELECT productos.codigo,productos.producto,papeletaunit.cantidad,papeletaunit.lote1,papeletaunit.lote2,papeletaunit.fecha,papeletaunit.tarimas,turnopersonal.descturno,lider.nombre_lider FROM `papeletaunit`
	LEFT JOIN productos ON papeletaunit.codigo=productos.codigo
	LEFT JOIN lider 	ON papeletaunit.lider=lider.id_lider
	LEFT JOIN turnopersonal ON papeletaunit.turno=turnopersonal.turno ORDER BY codigo_unit desc limit 1";

 $resultado = mysqli_query($conexion,$solicitud);

	$pdf = new FPDF();
	$pdf->AddPage('L','Letter');
	$pdf->Ln();
	while($fila = mysqli_fetch_array($resultado) ){
	$pdf->SetFont('Times','B',13);
	$pdf->Cell(28,10,'PRODUCTO','TRLB',0,'L');
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(97,10,utf8_decode($fila['producto']),1,1,'C');
	$pdf->SetFont('Times','B',13);
	$pdf->Cell(28,10,'LOTE',1,0,'L');
	$pdf->Cell(97,10,$fila['lote1'],1,1,'C');
	$pdf->Cell(28,10,'',1,0,'L');
	$pdf->Cell(97,10,$fila['lote2'],1,1,'C');
	$pdf->Cell(28,10,'CANTIDAD',1,0,'L');
	$pdf->Cell(97,10,$fila['cantidad'],1,1,'C');
	$pdf->Cell(28,10,'FECHA',1,0,'L');
	$pdf->Cell(37,10,$fila['fecha'],1,0,'C');
	$pdf->Cell(20,10,'TARIMA',1,0,'C');
	$pdf->Cell(40,10,$fila['tarimas'],1,1,'C');
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

$pdf->Output();
 mysql_close();

?>
