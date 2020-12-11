<?php
include_once("conexion.php");
if($_REQUEST['empcodigo']) {
$sql = "SELECT * FROM productos WHERE codigo='".$_REQUEST['empcodigo']."'";
$resultset = mysqli_query($conexion, $sql)or die("database error:".mysqli_error($conexion));
	
$data = array();
while( $rows =  mysqli_fetch_assoc($resultset) ){
	$data = $rows;
}
echo json_encode($data);
} else {
	echo 0;
}
?>