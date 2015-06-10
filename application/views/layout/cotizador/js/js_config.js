var FX_DELAY = 10;
//var SHOW_JQ_ERROR = false;
if(document.location.hostname == "sistema-demo.3eeweb.com" || document.location.hostname ==  "192.168.1.165")
{
		var webRoot = document.location.hostname;
}
else
{
	var webRoot = document.location.hostname + "/demo";
}

var WEB_ROOT = "http://" + webRoot; 

var LOADER = "<div align='center'><img src='"+WEB_ROOT+"/images/loading.gif'><br>Cargando...</div>";
var LOADER2 = "<div align='center'><img src='"+WEB_ROOT+"/images/loader.gif'>";
/*
$(function() {
    $( "#fechaReserva" ).datepicker();
    $( "#fechaViaje" ).datepicker();
  });
  
  jQuery(function($){
   $.datepicker.regional['es'] = {
      closeText: 'Cerrar',
      prevText: '<Ant',
      nextText: 'Sig>',
      currentText: 'Hoy',
      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
      weekHeader: 'Sm',
      dateFormat: 'dd-mm-yy',
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: ''};
   $.datepicker.setDefaults($.datepicker.regional['es']);
});
*/