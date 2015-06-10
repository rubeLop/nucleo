<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 18:44:18
         compiled from "C:\wamp\www\ejemplo\application\views\week\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11825557707e27e9160-49691148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570c93ece544da12c274c5e246bbc61eec3aa013' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\week\\index.tpl',
      1 => 1433868256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11825557707e27e9160-49691148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557707e29a66c7_00421447',
  'variables' => 
  array (
    '_urlBoxContent' => 0,
    '_urlPaginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557707e29a66c7_00421447')) {function content_557707e29a66c7_00421447($_smarty_tpl) {?> 
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-6">
      <table class="table">
        <thead>
          <th colspan="3">
            
            <button type="button" class="btn btn-default" id="addWeek">
              <b>Agregar Nueva</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número</th>
          <th class="col-md-4">Nombre de semana</th>
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
