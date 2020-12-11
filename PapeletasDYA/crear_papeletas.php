<?php
include ("conexion.php");

$codigo = $_POST['codigo'];
$cantidad=$_POST['cantidad'];
$lote1 	= $_POST['lote1'];
$lote2 	= $_POST['lote2'];
$fecha	= $_POST['fecha'];
$tarimas= $_POST['tarimas'];
$turno	= $_POST['turno'];
$lider	= $_POST['lider'];

$solicitud = "INSERT INTO papeletaunit(codigo,cantidad,lote1,lote2,fecha,turno,tarimas,lider) VALUES('$codigo','$cantidad','$lote1','$lote2','$fecha','$turno','$tarimas','$lider')";

$resultado=mysqli_query($conexion,$solicitud);
header("location:pdf1_js.php");






?>