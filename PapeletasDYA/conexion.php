<?php
$servername="localhost";
$username="root";
$password="";
$dbname="producciondya";

$conexion = mysqli_connect($servername,$username,$password,$dbname) or die ("Conexion fallida: " .mysqli_connect_error());
if (mysqli_connect_errno()){
printf("la conexion ha fallado: %s\n",mysqli_connect_error());
exit();
}
?>