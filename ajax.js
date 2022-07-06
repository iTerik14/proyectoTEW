function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
	} catch  (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");	
		}
		catch(E){
			xmlhttp = false;	
		}
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined')
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function MostrarConsulta(datos){
	divResultado = document.getElementById('resultado');
	ajax = objetoAjax();
	ajax.open("GET",datos);
	ajax.onreadystatechange=function(){
		//preguntamos si la peticion ha sido finalizada
		if(ajax.readyState == 4)
		{
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}
function enviarDatosEmpleado(){
	//div donde se mostrara el resultado
	divResultado = document.getElementById('resultado');
	//recogemos los valores de los inputs
	nom = document.nuevo_empleado.nombres.value;
	dep = document.nuevo_empleado.departamento.value;
	suel = document.nuevo_empleado.sueldo.value;

	//instanciamos el objetoAjax
	ajax=objetoAjax();
	ajax.open("POST","reporte2.php",true);

	ajax.onreadystatechange=function(){
		if (ajax.readyState == 4)
		{
			//mostrar el resultado
			divResultado.innerHTML = ajax.responseText
			//llamamos a la fucion limpiarCampos
			
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviamos los valores a registro.php para la insercion
	ajax.send("nombres="+nom+"&departamento="+dep+"&sueldo="+suel)
}
