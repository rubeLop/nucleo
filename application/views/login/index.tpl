<div class="clearfix"></div>
<div class="col-md-4"></div>
<div class="center-block" style="vertical-align:middle">
  <div class="col-lg-4 text-center">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Iniciar Sesión</h3>
      </div>
      <div class="panel-body">
        <form method="post" class="form-group" autocomplete="off" onsubmit="return Login(this)" id="formLogin">
          <!--<div class="form-group">
            <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
            </div>-->
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required" value="rube_chido@hotmail.com" tabindex="1" />
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control"  placeholder="Password" required="required"  value="admin" tabindex="2"/>
          </div>
          <div class="form-group">
            <button type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary btn-sm" tabindex="3">Sign in</button>
          </div>
          {*} animacion de carga de procesos {*}
          <div id="stLoader"></div>
          <div id="txtErrMsg"></div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>