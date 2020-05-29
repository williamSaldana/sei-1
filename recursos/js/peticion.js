window.onload = function () {

	var data = sessionStorage.getItem('ventana');

	 if (data=='tratamiento') {

		console.log(data);		
		this.busquedaTratamiento();

	}else if (data=='usuario') {

		console.log(data);
		this.busquedaUsuario();
		
	} else if (data=='gestionUsuarioUE') {

		console.log(data);
		this.busquedaUsuarioUE();
		
	} else if(data=='unidadExperimental'){
		
		console.log(data);
		this.busquedaGestionUe();

	}

}

function valores(form, arreglo) {
	
	var todos = new Array();
	
	//console.log(form[arreglo][1]);
	
	for (var i = 0, total = form[arreglo].length; i < total; i++){

		if (form[arreglo][i].checked) {

			todos.push(form[arreglo][i].value);
		}
	}
	
	return todos;
	
}

var listado = new Array();
var num = 1;
var especimen = new Array();
var a;

function registroUE(){
	
	var res = new Array();
	var trata = 'tratamiento[]';
	var formulario = document.getElementById('form1');
	res =valores(formulario,trata);
	

	obtenerDato();
	obtenerUex();
	obtenerTratamiento(res);

}

function obtenerTratamiento(res) {

	var nombre = document.getElementById('nombre').value;

	var QueryString='funcion=ejecutar&array='+res+'&nombre='+nombre;
	$.ajax({
		async: false,
		type: "GET",
		url  : "modulos/gestion_ue/insertarUexTrata.php",
		data : QueryString,
  
		success    : function(response){
			alert('Unidad registrada existosamente');
  
	   }
  
	 });
	 window.location.href="?page=gestion_ue/listarUe"
}

function obtenerDato() {

	var nombre = document.getElementById('nombre').value;
	var estado = document.getElementById('estadoUE').value;

	var arreglo = Array();
	var table = document.getElementById('table_result');
	var cells = table.getElementsByTagName('td');

	var filas = table.rows.length;

	var campos = (filas - 1) * 4;

	for (var index = 1; index < campos; index = index + 4) {
		var valor = cells[index].outerHTML;
		let str = String(valor).replace(/(<([^>]+)>)/ig, '');
		arreglo.push(str);
	}
	//Lo convierto a objeto
	var jObject = {};
	for (i in arreglo) {
		jObject[i] = arreglo[i];
	}
	//Luego lo paso por JSON  a un archivo php llamado js.php
	jObject = JSON.stringify(jObject);
	console.log(jObject);
	
	var QueryString='funcion=ejecutar&array='+jObject+'&nombre='+nombre+'&estado='+estado;
	$.ajax({
		async: false,
		type: "GET",
		url  : "modulos/gestion_ue/insertarUE.php",
		data : QueryString,
  
		success    : function(response){
			
  
	   }
  
	 });
	 
}

function obtenerUex() {

	var experimental = document.getElementById('nombre').value;
	var table = document.getElementById('tableEspecimen');
	var cells = table.getElementsByTagName('td');

//	console.log(experimental);

	var filas = table.rows.length;

	var campos = (filas - 1) * 6;

	var a = campos / 6 ;

	var arreglo = new Array();
	
	var indice = 0;
	var condicion1 = 0;
	var condicion2 = 5;
	
	for (var fila = 0; fila < a; fila++) {

		var row = new Array();
		
		for (var column = 0; column < 6; column++) {
			
			if (indice == condicion1) {

				condicion1 = condicion1 +6;

			}else if(indice == condicion2){

				condicion2 = condicion2 +6;

			} else{
				
				var valor = cells[indice].outerHTML;
				
				let str = String(valor).replace(/(<([^>]+)>)/ig, '');
				
				row.push(str);
			}
			indice++;
		}

		arreglo.push(row);
		
	}


	//Lo convierto a objeto
	var jObject2 = {};
	for (i in arreglo) {
		jObject2[i] = arreglo[i];
	}

	//Luego lo paso por JSON  a un archivo php llamado js.php

	jObject2 = JSON.stringify(jObject2);

	

	var QueryString='funcion=ejecutar&array='+jObject2+'&nombre='+experimental;

	$.ajax({
		async: false,
		type: 'GET',
		url: "modulos/especimen/insertarEspecimen.php",
		data: QueryString,
		success: function (server) {
			 

		}
	});
 
}


function agregarEspecimen() {
	codigoEspecimen = document.getElementById("codigoEspecimen").value
	pesoEspecimen = document.getElementById("pesoEspecimen").value
	fNacimientoEspecimen = document.getElementById("fNacimientoEspecimen").value
	estadoEspecimen = document.getElementById("estadoEspecimen").value

	if (estadoEspecimen == 1) {
		estadoEspecimen = "Activo"
	}else{
		estadoEspecimen = "Inactivo"
	}

	if (codigoEspecimen == "" || pesoEspecimen == "" || fNacimientoEspecimen == "") {
		alert("llene todos los campos");

	}else{
	especimen.push([codigoEspecimen, pesoEspecimen, fNacimientoEspecimen, estadoEspecimen]);
	console.log(especimen);

	var length = especimen.length
	var str = ''

	for (var i = 0; i < length; i++) {

		var item = especimen[i]
		var sum = i + 1;
		str += '<tr>' +
			'<td>' + sum + '</td>' +
			'<td>' + item[0] + '</td>' +
			'<td>' + item[1] + '</td>' +
			'<td>' + item[2] + '</td>' +
			'<td>' + item[3] + '</td>' +
			'<td><input type="button" onclick="eliminarEspecimen(' + sum + ',' + i + ');" value="Eliminar" /></td>' +
			'</tr>'
		num++;
	}
	$("#tableEspecimen tbody").html(str)
	$("#tableEspecimen").css('display', 'block');
}
	document.getElementById("codigoEspecimen").value = ""
	document.getElementById("pesoEspecimen").value = ""
	document.getElementById("fNacimientoEspecimen").value = ""
	document.getElementById("estadoEspecimen").value = "1"
}

//desde aqui
function llenarCampo(a) {
	//console.log("boton");
	var codigo = a;
	document.getElementById("txtasis").value = codigo;
	var boton;
	boton = document.getElementById("cerrar");
	$(boton).trigger("click");
	agregarUsuario();
}
//hasta aqui

function busquedaUsuarioUE() {

	//var texto = document.getElementById("txtnom").value;
	var texto = $("#txtnom").val();

	var parametros = {
		"texto": texto
	};

	$.ajax({
		async: false,
		data: parametros,
		url: 'modulos/gestion_ue/buscarU_UE.php',
		type: 'POST',
		success: function (response) {
			$("#datosU_UE").html(response);
		}
	})

		.done(function (resultado) {
			$("#tabla_resultado").html(resultado);
		})
}



function agregarUsuario() {

	var texto1 = document.getElementById("txtasis").value;

	var parametros = {
		"texto1": texto1
	};

	$.ajax({
		async: false,
		data: parametros,
		url: 'modulos/gestion_ue/asignarUsu.php',
		type: 'POST',
		success: function (response) {

			if (response == 'false') {

				$("#table_result").css('display', 'none');
				alert("no datos en la consulta");

			} else {

				listado.push(JSON.parse(response)[0]);

				var length = listado.length
				var str = ''
				
				for (var i = 0; i < length; i++) {

					var item = listado[i]
					var sum = i + 1;

					str += '<tr>' +
						'<td>' + sum + '</td>' +
						'<td>' + item[0] + '</td>' +
						'<td>' + item[1] + '</td>' +
						'<td><input type="button" onclick="eliminarUsuario(' + sum + ',' + i + ');" value="Eliminar" /></td>' +
						'</tr>'
					num++;
				}
				$("#table_result tbody").html(str)
				$("#table_result").css('display', 'block');
			}
		}
	})
	boton1 = document.getElementById("txtasis");
	$(boton1).trigger("click");
}


function eliminarUsuario(a, b) {

	document.getElementById("table_result").deleteRow(a);

	listado.splice(b, 1);
	 console.log(listado);

	 var length = listado.length
	 var str = ''
	 
	 for (var i = 0; i < length; i++) {

		 var item = listado[i]
		 var sum = i + 1;

		 str += '<tr>' +
			 '<td>' + sum + '</td>' +
			 '<td>' + item[0] + '</td>' +
			 '<td>' + item[1] + '</td>' +
			 '<td><input type="button" onclick="eliminarUsuario(' + sum + ',' + i + ');" value="Eliminar" /></td>' +
			 '</tr>'
		 num++;
	 }
	 $("#table_result tbody").html(str)
	 $("#table_result").css('display', 'block');

}

function eliminarEspecimen(a, b) {

	document.getElementById("tableEspecimen").deleteRow(a);

	especimen.splice(b, 1);

	var length = especimen.length
	var str = ''

	for (var i = 0; i < length; i++) {

		var item = especimen[i]
		var sum = i + 1;
		str += '<tr>' +
			'<td>' + sum + '</td>' +
			'<td>' + item[0] + '</td>' +
			'<td>' + item[1] + '</td>' +
			'<td>' + item[2] + '</td>' +
			'<td>' + item[3] + '</td>' +
			'<td><input type="button" onclick="eliminarEspecimen(' + sum + ',' + i + ');" value="Eliminar" /></td>' +
			'</tr>'
		num++;
	}
	$("#tableEspecimen tbody").html(str)
	$("#tableEspecimen").css('display', 'block');

}



function busquedaUsuario() {

	var texto = document.getElementById("txtListUsuario").value;

	var parametros = {
		"texto": texto
	};

	$.ajax({
		async: false,
		data: parametros,
		url: 'modulos/usuarios/bkn_busquedaUsuarioTR.php',
		type: 'POST',
		success: function (response) {
			$("#datosU").html(response);
		}
	})

		.done(function (resultado) {
			$("#tabla_resultado").html(resultado);
		})
} 

function busquedaGestionUe() {

	var texto = document.getElementById("txtUnidadExperimantal").value;

	var parametros = {
		"texto": texto
	};

	$.ajax({
		async: false,
		data: parametros,
		url: 'modulos/gestion_ue/bkn_busquedaUETR.php',
		type: 'POST',
		success: function (response) {
			$("#datosUE").html(response);
		}
	})

		.done(function (resultado) {
			$("#tabla_resultado").html(resultado);
		})
}





function busquedaTratamiento() {

	var texto = document.getElementById("txtTratamiento").value;

	var parametros = {
		"texto": texto
	};

	$.ajax({
		async: false,
		data: parametros,
		url: 'modulos/tratamientos/bkn_busquedaTratamientoTR.php',
		type: 'POST',
		success: function (response) {
			$("#datosT").html(response);
		}
	})

		.done(function (resultado) {
			$("#tabla_resultado").html(resultado);
		})
}

$(document).on('keyup', '#busqueda', function () {
	var valorBusqueda = $(this).val();
	if (valorBusqueda != "") {
		obtener_registros(valorBusqueda);
	}
	else {
		obtener_registros();
	}
});
