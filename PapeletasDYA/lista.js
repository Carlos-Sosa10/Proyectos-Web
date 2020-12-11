//(funcion)(){
var lista= document.getElementById('formulario'),
codigo=lista.codigo,
producto=lista.producto,
cantidad=lista.cantidad,
error=document.getElementById('error');

function validarcodigo(e){
	if(codigo.value == '' ||codigo==null){
		console.log('completa el nombre');
		error.style.display='block';
		error.innerHTML=error.innerHTML + '<li>Ingresa un codigo</li>';
		e.preventDefault();
	}else{
		error.style.display='none';
	}
	}
function validarproducto(e){
	if(producto.value=='' || producto ==null){
		console.log('completa el nombre de producto');
		error.style.display='block';
		error.innerHTML=error.innerHTML + '<li> Ingresa un nombre de producto</li>';
		e.preventDefault();
	   }else{
	   	error.style.display='none';
	   }
       }
 function validarcantidad(e){
 	if(cantidad.value == '' || correo==null){
 	  console.log('completa la cantidad');
 	  error.style.display='block';
 	  error.innerHTML=error.innerHTML + '<li>Ingresa una cantidad</li>';
 	  e.preventDefault();
     }else{
     	error.style.display='none';
     }
 }      

function validarForm(e){
	error.innerHTML='';
	error.style.display='block';
	validarcodigo(e);
	validarproducto(e);
	validarcantidad(e);
}

formulario.addEventListener('submit',validarForm);
//}())
