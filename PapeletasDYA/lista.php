<?php
include('Menu.php');
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="producciondya";

$enlace= mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
if(!$enlace){
	echo "Error en la conexion con el servidor";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista</title>
        <!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="estiloslista.css">
</head>
<body>
<div class="contenedor">
<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
<div class="contenedor-inputs">
<input type="text" name="codigo" placeholder="Código">
<input type="text" name="producto" placeholder="Producto">
<input type="text" name="cantidad" placeholder="Cantidad">
<ul class="error" id="error"></ul>
</div>
<input type="submit" class="btn" name="registrarse" value="Registrarse">
</form>
<div class="tabla">
<table>
	<tr>
		<th>Código</th>
		<th>Producto</th>
		<th>Cantidad</th>
                <th>Acciones</th>
        </tr>
        
        <?php
        $consulta="SELECT * FROM productos";
        $ejecutarConsulta=mysqli_query($enlace,$consulta);
        $verFilas=mysqli_num_rows($ejecutarConsulta);
        $fila =mysqli_fetch_array($ejecutarConsulta);
        
        
        if(!$ejecutarConsulta){
        	echo "Error en la consulta";
        }else{
        	if($verFilas<1){
        		echo"<tr><td>Sin Registros</td></tr>";
        	}else{
        		for($i=0; $i<=$fila; $i++){
        			echo '
        			<tr>
        			<td>'.$fila[0].'</td>
        			<td>'.$fila[1].'</td>
        			<td>'.$fila[2].'</td>
        			</tr>        
        			';
        			 $fila =mysqli_fetch_array($ejecutarConsulta);
        		}
        	}
        }
        ?>
</table>
</div>
</div>
<script src="lista.js"></script>
</body>
</html>
<?php
if(isset($_POST['registrarse'])){
        $codigo=$_POST["codigo"];
	$producto=$_POST["producto"];
	$cantidad= $_POST["cantidad"];

	$insertarDatos= "INSERT INTO productos VALUES('$codigo','$producto','$cantidad')";
	$ejecutarInsertar =mysqli_query($enlace,$insertarDatos);
	if(!$ejecutarInsertar){
		echo "Error en la linea de sql";
	}
}
?>