$(document).ready(function() {  
    $("#addWeek").click(function(){
        modAddWeek();
    });
});

function paginator(page)
{
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/week/ajax_paginator",
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
        // $("#btnLogin").prop("disabled",true);
        // window.location = WEB_ROOT;
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


function modAddWeek(){
    $.ajax({
      type: "POST",
      url: WEB_ROOT+"/week/ajax_mod_add",
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

function modEditWeek(idWeek){
    $.ajax({
      type: "POST",
      url: WEB_ROOT+"/week/ajax_mod_update",
      data: {idWeek:idWeek},
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

$( document ).on( "submit", "#frmWeek", function() {
    return false;
})

$( document ).on( "click", "#btnSave", function() {
  
   	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/week/ajax_add",
	  	data: $("#frmWeek").serialize(true),
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
          $("#season_name").focus();
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
	  	url: WEB_ROOT+"/week/ajax_update",
	  	data: $("#frmWeek").serialize(true),
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
          $("#season_name").focus();
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

function deleteWeek(idWeek){
  if (confirm('¿Esta seguro de eliminar este elemento?')) {
      $.ajax({
      type: "POST",
      url: WEB_ROOT+"/week/ajax_delete",
      data: {idWeek:idWeek},
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

