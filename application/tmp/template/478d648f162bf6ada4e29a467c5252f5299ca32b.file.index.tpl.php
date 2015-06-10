<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 23:35:23
         compiled from "C:\wamp\www\ejemplo\application\views\habitation\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3957557759841d7781-35201234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478d648f162bf6ada4e29a467c5252f5299ca32b' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\habitation\\index.tpl',
      1 => 1433885482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3957557759841d7781-35201234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55775984390e76_46733019',
  'variables' => 
  array (
    '_urlBoxContent' => 0,
    '_urlPaginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55775984390e76_46733019')) {function content_55775984390e76_46733019($_smarty_tpl) {?> 
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-11">
      <table class="table" class="col-md-11">
        <thead>
          <th colspan="10">
            
            <button type="button" class="btn btn-default" id="addHabitation">
              <b>Agregar Nueva Habitación</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número</th>
          <th class="col-md-3">Destino</th>
          <th class="col-md-3">Lobby</th>
          <th class="col-md-3">Habitación</th>
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
