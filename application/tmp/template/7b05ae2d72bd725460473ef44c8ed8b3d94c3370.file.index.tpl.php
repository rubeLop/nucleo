<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 17:04:21
         compiled from "C:\wamp\www\ejemplo\application\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10086556798400f0c09-28497354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b05ae2d72bd725460473ef44c8ed8b3d94c3370' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\login\\index.tpl',
      1 => 1432921346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10086556798400f0c09-28497354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55679840127710_07552383',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55679840127710_07552383')) {function content_55679840127710_07552383($_smarty_tpl) {?><div class="clearfix"></div>
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
          
          <div id="stLoader"></div>
          <div id="txtErrMsg"></div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div><?php }} ?>
