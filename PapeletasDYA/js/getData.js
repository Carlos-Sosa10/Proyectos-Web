$(document).ready(function(){  
	// code to get all records from table via select box
	$("#codigo").change(function() {    
		var codigo = $(this).find(":selected").val();
		var dataString = 'empcodigo='+ codigo;    
		$.ajax({
			url: 'getPersonal.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(employeeData) {
			   if(employeeData) {
					$("#heading").show();		  
					$("#no_records").hide();					
					$("#emp_codigo").text(employeeData.codigo);
					$("#emp_producto").text(employeeData.producto);
					$("#emp_cantidad").text(employeeData.cantidad);
					$("#records").show();		 
				} else {
					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();
				}   	
			} 
		});
 	}) 
});
