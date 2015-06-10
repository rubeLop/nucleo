$(document).ready(function() {  
    $("#addHabitation").click(function(){
        modAddHabitation();
    });
});


function paginator(page)
{
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/habitation/ajax_paginator",
	  	data: {type:"page", page:page},
	  	beforeSend: function(){
        $("#stLoader_bar").show();
        $("#stLoader_bar").html(LOADER_BAR);
      },	
		success: function(response) {
     var splitResp = response.split("[#]");
    if(splitResp[0] == "ok"){	
        $("#stLoader_bar").hide();
        $("#contentData").html(splitResp[1]);
        $("#contentPaginator").html(splitResp[2]);
			}
      else {
        $("#stLoader_bar").hide();
				alert("Ocurrió un error al mostrar los datos");
      }
			
		},
		error:function(){
			  alert("Something went wrong...")
		}
    });
    
    return false;
}


function modAddHabitation(){
    $.ajax({
      type: "POST",
      url: WEB_ROOT+"/habitation/ajax_mod_add",
      data: {type:"page"},
      beforeSend: function(){
    },	
    success: function(response) {
      if($('#modalDefault').modal({show:true})) {
        $("#modal-content").html(response); 
      } 
    },
    error:function(){
        alert("Something went wrong...")
    }
  });
}

function modEditLobby(idLobby){
    $.ajax({
      type: "POST",
      url: WEB_ROOT+"/habitation/ajax_mod_update",
      data: {idLobby:idLobby},
      beforeSend: function(){
    },	
    success: function(response) {
      if($('#modalDefault').modal({show:true})) {
        $("#modal-content").html(response); 
      } 
    },
    error:function(){
        alert("Something went wrong...")
    }
  });
}

/* $('#my_form').keydown(function() {
  var key = e.which;
  if (key == 13) {
  // As ASCII code for ENTER key is "13"
  $('#my_form').submit(); // Submit form code
  }
}); */

$( document ).on( "submit", "#frmLobby", function() {
    return false;
})

$( document ).on( "change", "#idDestination", function() {
  
    $.ajax({
        type: "POST",
        dataType: "json",
        url: WEB_ROOT+"/lobby/ajax_enum",
        data: {idDestination:$("#idDestination").val()},
        beforeSend: function(){
          $("#idLobby").append('<option value="" selected="selected" disabled="disabled">Cargando...</option>');
        },
        success: function(response) {
          $("#idLobby").empty();
          $("#idLobby").append('<option value="" selected="selected" disabled="disabled">Selecciona un lobby</option>');
          $.each(response, function (i, valor) {
            $("#idLobby").append("<option value='" + valor.idDestination + "'>" + valor.name + "</option>");
          });
        },
        error:function(){
			  alert("Something went wrong...")
        }
    });
    return false;
})





$( document ).on( "click", "#btnSave", function() {
  
   	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/habitation/ajax_add",
	  	data: $("#frmLobby").serialize(true),
	  	beforeSend: function(){
        $("#stLoader_barMod").show();
        $("#stLoader_barMod").html(LOADER_BAR);
        $("#btnSave").prop("disabled",true);
      },	
		success: function(response) {
      console.log(response);
			var splitResp = response.split("[#]");
    if(splitResp[0] == "ok"){	
        // $("#stLoader_bar").hide();
        $("#txtError").html(splitResp[1]);
        $("#contentData").html(splitResp[2]);
        $("#contentPaginator").html(splitResp[3]);
        // $("#contentPaginator").html(splitResp[2]);
        // $("#btnLogin").prop("disabled",true);
        // window.location = WEB_ROOT;
        $("#btnSave").prop("disabled",true);
        $("#modal-content").html(''); 
        $('#modalDefault').modal('hide') 
			}
      else if(splitResp[0] == "fail"){
          $("#lobby_name").focus();
          $("#txtErrMsgMod").show();
          $("#txtErrMsgMod").html(splitResp[1]);
          $("#stLoader_barMod").hide();
          $("#btnSave").prop("disabled",false);
			}
      else {
        $("#stLoader_barMod").hide();
        $("#btnSave").prop("disabled",false);
				alert("Ocurrió un error al mostrar los datos");
      }
			
		},
		error:function(){
			  alert("Something went wrong...")
		}
    });
    
    return false;
})


$( document ).on( "click", "#btnUpdate", function() {
  
   	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/habitation/ajax_update",
	  	data: $("#frmLobby").serialize(true),
	  	beforeSend: function(){
        $("#stLoader_barMod").show();
        $("#stLoader_barMod").html(LOADER_BAR);
        $("#btnSave").prop("disabled",true);
      },	
		success: function(response) {
      console.log(response);
			var splitResp = response.split("[#]");
    if(splitResp[0] == "ok"){	
        // $("#stLoader_bar").hide();
        $("#txtError").html(splitResp[1]);
        $("#contentData").html(splitResp[2]);
        $("#contentPaginator").html(splitResp[3]);
        // $("#contentPaginator").html(splitResp[2]);
        // $("#btnLogin").prop("disabled",true);
        // window.location = WEB_ROOT;
        $("#btnSave").prop("disabled",true);
        $("#modal-content").html(''); 
        $('#modalDefault').modal('hide') 
			}
      else if(splitResp[0] == "fail"){
          $("#lobby_name").focus();
          $("#txtErrMsgMod").show();
          $("#txtErrMsgMod").html(splitResp[1]);
          $("#stLoader_barMod").hide();
          $("#btnSave").prop("disabled",false);
			}
      else {
        $("#stLoader_barMod").hide();
        $("#btnSave").prop("disabled",false);
				alert("Ocurrió un error al mostrar los datos");
      }
			
		},
		error:function(){
			  alert("Something went wrong...")
		}
    });
    
    return false;
})

function deleteLobby(idLobby){
  if (confirm('¿Esta seguro de eliminar este elemento?')) {
      $.ajax({
      type: "POST",
      url: WEB_ROOT+"/habitation/ajax_delete",
      data: {idLobby:idLobby},
      beforeSend: function(){
        $("#stLoader_bar").show();
        $("#stLoader_bar").html(LOADER_BAR);
        $("#btnSave").prop("disabled",true);
      },	
    success: function(response) {
      console.log(response)
      var splitResp = response.split("[#]");
      
    if(splitResp[0] == "ok"){	
        $("#txtError").html(splitResp[1]);
        $("#contentData").html(splitResp[2]);
        $("#contentPaginator").html(splitResp[3]);
        $("#stLoader_bar").hide();
      }
      else {
        $("#stLoader_bar").hide();
        alert("Ocurrió un error en la operacion");
      }
      
    },
    error:function(){
        alert("Something went wrong...")
    }
    });
    return false;
  }
}

