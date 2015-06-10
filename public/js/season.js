$(document).ready(function() {
  
        $("#addSeason").click(function(){
            modAddSeason();
        });  
        
      // alert("document ready occurred!");
      
        // $(".btn").click(function(){
            // $("#myModal").modal('show');
        // });
      
      
     // $('body').modalmanager('loading');
      // $('#exampleModal').modal({show:true});
      // $('#exampleModal').modal();
            // $('#exampleModal').on('loaded.bs.modal', function (e) {
          // $.ajax({
            // type: "POST",
            // url: WEB_ROOT+"/ajax/demo",
            // data: {type:"page"},
            // beforeSend: function(){
            // },	
            // success: function(response) {
              // $("#contentModal").html("hola");
            
            // },
          // error:function(){
              // alert("Something went wrong...")
          // }
          // });
      // })
      
      // $('#exampleModal').on('shown.bs.modal', function (e) {
          // $.ajax({
            // type: "POST",
            // url: WEB_ROOT+"/ajax/demo",
            // data: {type:"page"},
            // beforeSend: function(){
            // },	
            // success: function(response) {
              // $("#contentModal").html("hola");
            
            // },
          // error:function(){
              // alert("Something went wrong...")
          // }
          // });
      // })
});

        // function Save(){
          // alert('hola');
        // }
// $( "#btnSave" ).click(function() {
  // alert( "Handler for .click() called." );
// });

// $( "#btnSave" ).bind( "click", function() {
  // alert( "User clicked on 'foo.'" );
// });




function paginator(page)
{
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/season/ajax_paginator",
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


function modAddSeason(){
    $.ajax({
      type: "POST",
      url: WEB_ROOT+"/season/ajax_mod_add",
      data: {type:"page"},
      beforeSend: function(){
    },	
    success: function(response) {
      console.log(response);
      if($('#modalDefault').modal({show:true})) {
        $("#modal-content").html(response); 
      } 
    },
    error:function(){
        alert("Something went wrong...")
    }
  });
}

function modEditSeason(idSeason){
    $.ajax({
      type: "POST",
      url: WEB_ROOT+"/season/ajax_mod_update",
      data: {idSeason:idSeason},
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

$( document ).on( "submit", "#frmSeason", function() {
    return false;
})

$( document ).on( "click", "#btnSave", function() {
  
   	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/season/ajax_add",
	  	data: $("#frmSeason").serialize(true),
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
	  	url: WEB_ROOT+"/season/ajax_update",
	  	data: $("#frmSeason").serialize(true),
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

function deleteSeason(idSeason){
  if (confirm('¿Esta seguro de eliminar este elemento?')) {
      $.ajax({
      type: "POST",
      url: WEB_ROOT+"/season/ajax_delete",
      data: {idSeason:idSeason},
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

