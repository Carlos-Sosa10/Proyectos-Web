<?php
include ('Menu.php');
include("conexion.php");

//$tarimaini = $_POST['tarimaini'];
//$tarimafin = $_POST['tarimafin'];

/* $solicitud = "SELECT productos.codigo,productos.producto,productos.cantidad, papeleta.lote,papeleta.fecha,papeleta.tarimaini,papeleta.tarimafin,turnopersonal.descturno,lider.nombre_lider FROM `papeleta` 
LEFT JOIN productos ON papeleta.codigo=productos.codigo
LEFT JOIN lider ON papeleta.lider=lider.id_lider 
LEFT JOIN turnopersonal ON papeleta.turno=turnopersonal.turno ORDER BY codigo_pap desc limit 1";
*/


//////////////////////////////////////////////////////////
?>
<form action="pdf_js.php" method="post">
    Inicio de tarima: <input type="number" name="tarimaini"><br>
    Fin de tarimas: <input type="number" name="tarimafin"><br>
    <input type="submit" value="Enviar">
</form> 
<?php   
//////////////////////////////////////////////////////////



