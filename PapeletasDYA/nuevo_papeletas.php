<?php
include("conexion.php");

$codigo = $_POST['codigo'];
$lote = $_POST['lote'];
$fecha = $_POST['fecha'];
$turno = $_POST['turno'];
$tarimaini = $_POST['tarimaini'];
$tarimafin = $_POST['tarimafin'];
$lider = $_POST['lider'];

$solicitud = "INSERT INTO papeleta(codigo,lote,fecha,turno,tarimaini,tarimafin,lider) VALUES('$codigo','$lote','$fecha','$turno','$tarimaini','$tarimafin','$lider') ";


	
$resultado=mysqli_query($conexion,$solicitud);
header("location:papeletas.php");



?>