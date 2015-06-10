<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 21:51:13
         compiled from "C:\wamp\www\ejemplo\application\views\layout\cotizador\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214415567984009acf6-71603576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78c6e474b9bf3cfa98c0c357d30724c664cff1c5' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\layout\\cotizador\\header.tpl',
      1 => 1433879472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214415567984009acf6-71603576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556798400d5687_33250597',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_privileges' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556798400d5687_33250597')) {function content_556798400d5687_33250597($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\ejemplo\\application\\libs\\smarty\\plugins\\modifier.truncate.php';
?>    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</a>
        </div>
      <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="index") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Inicio</a></li>
            <?php if ($_smarty_tpl->tpl_vars['_privileges']->value['AccesPag']['all']==1||$_smarty_tpl->tpl_vars['_privileges']->value['AccesPag']['all']) {?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catalogos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="season") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
season">Temporada</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="destination") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
destination">Destino</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="lobby") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lobby">Lobby</a></li>
                <li class="divider"></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="habitation") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
habitation">Tipo de habitación</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="reservation") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
reservation">Tipo de reservación</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="week") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
week">Tipo de semana</a></li>
                
                <li class="divider"></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="bookingwindows") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
bookingwindows">Booking windows</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="travelwindows") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
travelwindows">Travel Windows</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="discount") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
dicount">Descuento</a></li>
                
              </ul>
            </li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['_privileges']->value['AccesPag']['login']==1||$_smarty_tpl->tpl_vars['_privileges']->value['AccesPag']['all']) {?>
            <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=='login') {?> active <?php }?>">
              <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php if ($_smarty_tpl->tpl_vars['_privileges']->value['Current']['userCurrent']) {?> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_privileges']->value['Current']['userCurrent'],10);
} else { ?>Ingresa<?php }?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php if ($_smarty_tpl->tpl_vars['_privileges']->value['Logged']['isLogged']==1) {?>
                  
                  <li><a id="btnLogout"  name="btnLogout" href="javascript:logout()">Salir</a></li>
                <?php }?>
                <?php if (empty($_smarty_tpl->tpl_vars['_privileges']->value['Logged']['isLogged'])) {?>
                  <li <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['pageCurrent']=="login") {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesión</a></li>
                <?php }?>
              </ul>
            </li>
            <?php }?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <?php }} ?>
