<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 20:32:25
         compiled from "C:\wamp\www\ejemplo\application\views\reservation\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31853557731399941d4-83831277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7b82e9838181bfcabe384d6645b2cb9986df70' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\reservation\\index.tpl',
      1 => 1433874740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31853557731399941d4-83831277',
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
  'unifunc' => 'content_55773139aefca0_90480869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55773139aefca0_90480869')) {function content_55773139aefca0_90480869($_smarty_tpl) {?> 
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-6">
      <table class="table">
        <thead>
          <th colspan="3">
            
            <button type="button" class="btn btn-default" id="addReservation">
              <b>Agregar Nuevo</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número</th>
          <th class="col-md-4">Tipo de reservación</th>
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
