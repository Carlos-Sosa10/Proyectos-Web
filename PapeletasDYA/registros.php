<?php
include('Menu.php');
include("conexion.php");

$solicitud = "SELECT productos.codigo,productos.producto,productos.cantidad, papeleta.lote,papeleta.fecha,papeleta.tarimaini,papeleta.tarimafin,turnopersonal.descturno 
FROM `papeleta` 
LEFT JOIN productos ON papeleta.codigo=productos.codigo 
LEFT JOIN turnopersonal ON papeleta.turno=turnopersonal.turno
";
$resultado = mysqli_query($conexion,$solicitud);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estiloslista.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Registros</title>
	<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<h1>Registro</h1>

<?php
//VACIADO DE DATOS
echo "<section class='formulario2'>";

echo "<style>
.mitabla td, .mitabla th {
  white-space: nowrap;
}
</style>";


echo "<table border='1'> <tr><td>Fecha</td><td>Codigo</td><td>Producto</td><td>Lote</td><td>Turno</td><td>Tarima Inicial</td><td>Tarima Final</td></tr>";

while ($fila = mysqli_fetch_array($resultado) ) {
	echo "<tr>";
	echo "<td>" .$fila['fecha']."</td>";
	echo "<td>" .$fila['codigo']."</td>";
	echo "<td>" .$fila['producto']."</td>";
	echo "<td>" .$fila['lote']."</td>";
	echo "<td>" .$fila['descturno']."</td>";
	echo "<td>" .$fila['tarimaini']."</td>";
	echo "<td>" .$fila['tarimafin']."</td>";
	echo "</tr>";
}

echo "</table>";
?>


</body>
</html>