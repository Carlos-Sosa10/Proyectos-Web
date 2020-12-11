<?php
if(isset($_GET['term'])){
	#conectare la base de datos
	$conexion=@mysqli_connect("localhost","root","root","producciondya");
	$return_arr = array();
	/*si la conexion a la base de datos, ejecuta instruccion SQL. */
	if($conexion)
	{
		$fetch =mysqli_query($conexion,"SELECT * FROM productos where codigo like '%" .mysql_real_escape_string($conexion,($_GET['term'])) ."%' LIMIT 0,50");
		/* Recuperar y almacenar en conjunto los resultados de la consulta. */
		while($row = mysqli_fetch_array($fetch){
			$codigo=$row['codigo'];
			$row_array['value'] =$row['codigo']." | ".$row['producto'];
			$cantidad['cantidad']=$row['cantidad'];
			array_push($return_arr,$row_array);

		}
	}
/* Cierra la conexion. */
mysqli_close($conexion);

/*Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>