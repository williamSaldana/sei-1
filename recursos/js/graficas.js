function generarGrafica() {
    
var bienestar = document.getElementById('bienestar').value;
var calidad = document.getElementById('calidad').value;

var QueryString='funcion=grafica&bienestar='+bienestar+'&calidad='+calidad;
console.log(QueryString);	
$.ajax({
	async :false,
		type: "GET",
		url  : "modulos/reportes/BienestarCalidadHuevo/bkn_BienestarCalidad.php",
		data : QueryString,
  
		success    : function(response){

			$("#cargaBarras").html(response);
  
	   }
  
   })
   .done(function (resultado) {
    $("#tabla_resultado").html(resultado);
  })

}

function graficaBienestarEspecimen() {
	var bienestar = document.getElementById('bienestar').value;
var especimen = document.getElementById('especimen').value;

var QueryString='funcion=grafica&bienestar='+bienestar+'&especimen='+especimen;
console.log(QueryString);	
$.ajax({
	async: false,
		type: "GET",
		url  : "modulos/reportes/BienestarEspecimen/bkn_BienestarEspecimen.php",
		data : QueryString,
  
		success    : function(response){

			$("#graficoBienestarEspecimen").html(response);
  
	   }
  
   })
   .done(function (resultado) {
    $("#tabla_resultado").html(resultado);
  })
}

function graficaEspecimenCalidad() {

	var calidad = document.getElementById('calidad').value;
var especimen = document.getElementById('especimen').value;

var QueryString='funcion=grafica&calidad='+calidad+'&especimen='+especimen;
console.log(QueryString);	
$.ajax({
	async: false,
		type: "GET",
		url  : "modulos/reportes/EspecimenCalidad/bkn_EspecimenCalidad.php",
		data : QueryString,
  
		success    : function(response){

			$("#graficoEspecimenCalidad").html(response);
  
	   }
  
   })
   .done(function (resultado) {
    $("#tabla_resultado").html(resultado);
  })
	
}

function graficaExperimentalProductividad() {

	var experimental = document.getElementById('experimental').value;
var productividad = document.getElementById('productividad').value;

var QueryString='funcion=grafica&experimental='+experimental+'&productividad='+productividad;
console.log(QueryString);	
$.ajax({
	async: false,
		type: "GET",
		url  : "modulos/reportes/ExperimentalProductividad/bkn_ExperimentalProductividad.php",
		data : QueryString,
  
		success    : function(response){

			$("#graficoExperimentalProductividad").html(response);
  
	   }
  
   })
   .done(function (resultado) {
    $("#tabla_resultado").html(resultado);
  })
	
}
