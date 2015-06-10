<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 00:18:34
         compiled from "C:\wamp\www\ejemplo\application\views\destination\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134685570ceba4fcd55-10331776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa5a05b20e4b856ab0d9df68aa006c6ff081d62' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\destination\\index.tpl',
      1 => 1433456308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134685570ceba4fcd55-10331776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_urlBoxContent' => 0,
    '_urlPaginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5570ceba668235_20927989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570ceba668235_20927989')) {function content_5570ceba668235_20927989($_smarty_tpl) {?> 
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-6">
      <table class="table">
        <thead>
          <th colspan="3">
            
            <button type="button" class="btn btn-default" id="addDestination">
              <b>Agregar Nuevo</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número de destino</th>
          <th class="col-md-4">Nombre de <br>destino</th>
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
