<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 21:43:43
         compiled from "C:\wamp\www\ejemplo\application\views\lobby\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:815955721373144cb2-66963628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd6117f8a2847716888f11b9cce301fc39919c3' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\lobby\\index.tpl',
      1 => 1433792622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815955721373144cb2-66963628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5572137334c5b2_48815437',
  'variables' => 
  array (
    '_urlBoxContent' => 0,
    '_urlPaginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5572137334c5b2_48815437')) {function content_5572137334c5b2_48815437($_smarty_tpl) {?> 
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-10">
      <table class="table" class="col-md-10">
        <thead>
          <th colspan="10">
            
            <button type="button" class="btn btn-default" id="addLobby">
              <b>Agregar Nuevo Lobby</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número de lobby</th>
          <th class="col-md-4">Nombre de <br>destino</th>
          <th class="col-md-4">Nombre de <br>lobby</th>
          <th class="col-md-1">Acciones</th>
        </thead>
        <tbody id = "contentData">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_urlBoxContent']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <tbody>
      </table>
  </div>
</div>
<div class="container theme-showcase" role="main">
  <div id="stLoader_bar"  class="col-md-6"></div>
</div>

<div class="container theme-showcase" role="main">
  <div id="contentPaginator">
    <?php if ($_smarty_tpl->tpl_vars['_urlPaginator']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_urlPaginator']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
  </div>
</div>
<?php }} ?>
