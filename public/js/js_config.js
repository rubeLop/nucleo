var FX_DELAY = 10;
//var SHOW_JQ_ERROR = false;
if(document.location.hostname == "sistema-demo.3eeweb.com" || document.location.hostname ==  "192.168.1.165")
{
		var webRoot = document.location.hostname;
}
else
{
	var webRoot = document.location.hostname + "/ejemplo";
}

var WEB_ROOT = "http://" + webRoot; 

var LOADER_BAR= "<div align='center' style='text-align:center'><img src='"+WEB_ROOT+"/public/img/ajax_loader_bar.gif'></div>";
var LOADER = "<div align='center' style='text-align:center'><img src='"+WEB_ROOT+"/public/img/ajax_loader.gif'><br>Cargando...</div>";
var LOADER2 = "<div align='center' style='text-align:center'><img src='"+WEB_ROOT+"/public/img/ajax_loader.gif'>";

function logout(){
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/login/ajax_logout",
	  	data: {type:"logout"},
	  	beforeSend: function(){
      },	
		success: function(response) {
     var splitResp = response.split("[#]");
      if(splitResp[0] == "ok"){	
          window.location = WEB_ROOT;
        }
        else {
          alert("Ocurrió un error al mostrar los datos");
        }
      },
      error:function(){
        alert("Something went wrong...");
      }
    });
}

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