<?php
//conexion con la base de datos
$conexion= new mysqli("localhost","root","");

if($conexion->connect_errno){
echo "fallo al conectar a Mysql:(".$conexion->connect_errno.")";
}
else{
	$conexion->select_db("producciondya");
 //declaramos como variables a los campos de texto del formulario
$usuario_prod=$_POST["usuario_prod"];
$password=$_POST["password"];
//consulta del usuario y el password
$consulta="SELECT usuario_prod,password FROM loginprod WHERE usuario_prod='$usuario_prod' and password='$password'";
if ($query=$conexion->query($consulta)) {
	$row=$query->fetch_array();
	$nr=$query->num_rows;
//si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
    if($nr ==1){
    header("Location:Menu.php");	
    }
   //si no existe lo va a enviar al login otra vez
   elseif ($nr <=0) {
   		header("location:index.html");
   	}	
    }
  else{
  	echo $conexion->error;
  }

}
?>