$(document).ready(function(){
  if($("#email").length){
    $("#email").focus();
  }
})

function Login()
{
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+"/login/ajax_login",
	  	data: {values:$("#formLogin").serialize(true)},
	  	beforeSend: function(){
        $("#stLoader").show();
        $("#stLoader").html(LOADER);
        $("#txtErrMsg").hide();
        $("#btnLogin").prop("disabled",true);
      },	
		success: function(response) {
			var splitResp = response.split("[#]");
    if(splitResp[0] == "ok"){	
        $("#btnLogin").prop("disabled",true);
        window.location = WEB_ROOT;
			}
			else if(splitResp[0] == "fail"){
          $("#txtErrMsg").show();
          $("#stLoader").hide();
          $("#txtErrMsg").html(splitResp[1]);
          $("#btnLogin").prop("disabled",false);
			}
      else {
				alert("Ocurrió un error al mostrar los datos");
      }
			
		},
		error:function(){
			  alert("Something went wrong...")
		}
    });
    
    return false;
}