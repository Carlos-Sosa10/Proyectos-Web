<?php
$server ='localhost';
$username ='root';
$password ='';
$database ='logindya';

try{
	$conexion=new PDO("mysql:host=$server;bdname=$database;",$username,$password);
}catch(PDOException $error){
	die('conexion fallida: '.$error->getMessage());
}

?>
