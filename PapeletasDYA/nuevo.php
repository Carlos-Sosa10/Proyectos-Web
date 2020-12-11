<?php
include('Menu.php');
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" href="estilosnuevo.css">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<title>Nueva Papeleta</title>
<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="estilosnuevo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/getData.js"></script>
  <!--codigo para llamar a select2-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>
<body>
	<h1>Nueva Papeleta</h1>
	<div class="contenedor-formulario">
	<div class="wrap">
	
  <form method="POST" action="nuevo_papeletas.php" class="formulario" name="formulario_registro" >	
    <div class="input-group">
    <div class="page-header">
    <h3>
     <select class='mi-selector' name="codigo" id="codigo">
      <option value="" selected="selected">Selecciona el codigo</option>
      <?php
      $sql = "SELECT * FROM productos";
      $resultset = mysqli_query($conexion,$sql)or die ("database error:".mysqli_error($conexion));
      while( $rows = mysqli_fetch_assoc($resultset) ){
        ?>
        <option value="<?php echo $rows["codigo"];?>"><?php echo $rows["codigo"]; ?></option>
      <?php } ?>
      </select>   
      </h3>
      </div>
     </div>
<br>
        <div id="display">
        <div class="row" id="heading" style="display:none;">
        <br>
        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">codigo</th>
        <th scope="col">producto</th>
        <th scope="col">cantidad</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th scope="row"></th>
        <td><div class="col-sm-4" id="emp_codigo"></div></td>
        <td><div class="col-sm-4" id="emp_producto"></div></td>
        <td><div class="col-sm-4" id="emp_cantidad"></div></td> 
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        <br>
      <div class="row" id="no-records">
      </div>  
    
     <div class="input-group">
     <input type="text" placeholder="Lote:" id="lote" name="lote">
     <label class="label" for="lote"></label>	
     </div>

     <div class="input-group">
     <input type="date" id="fecha" name="fecha">	
     </div>
	
   <div class="input-group">
    <select name="turno" id="turno">

      <option value="" selected="selected">Selecciona el turno</option>
      <?php
      $sql = "SELECT * FROM turnopersonal";
      $resultset = mysqli_query($conexion,$sql)or die ("database error:".mysqli_error($conexion));
      while( $rows = mysqli_fetch_assoc($resultset) ){
        ?>
        <option value="<?php echo $rows["turno"];?>"><?php echo $rows["descturno"]; ?></option>
      <?php } ?>
      </select>   
	    </div>

  <div class="input-group">
  <select name="lider" id="lider">

  <option value="" selected="selected">Selecciona el lider de linea</option>
  <?php
  $sql = "SELECT * FROM lider";
  $resultset = mysqli_query($conexion,$sql)or die ("database error:".mysqli_error($conexion));
  while( $rows = mysqli_fetch_assoc($resultset) ){
  ?>
  <option value="<?php echo $rows["id_lider"];?>"><?php echo $rows["nombre_lider"]; ?></option>
  <?php } ?>
  </select>   
  </div>

 <div class="input-group">
    <input type="number" placeholder="De Tarima:" id="tarimaini" name="tarimaini" min="1">
    <label class="label" for="tarimaini"></label>
    </div>
 <div class="input-group">
  <input type="number" placeholder="A:" id="tarimafin" name="tarimafin" min="1">
  <label class="label" for="tarimafin"></label>
</div>

 <input type="submit" name="ENVIAR" value="generar papeleta"/>
 </div>
 </form>
 </div>
 </div>
</body>
</html>