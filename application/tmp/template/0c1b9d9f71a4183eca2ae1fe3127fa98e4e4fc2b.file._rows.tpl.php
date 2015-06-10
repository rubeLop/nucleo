<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 19:09:04
         compiled from "C:\wamp\www\ejemplo\application\views\week\_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18710557707e29c9955-13712346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1b9d9f71a4183eca2ae1fe3127fa98e4e4fc2b' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\week\\_rows.tpl',
      1 => 1433869612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18710557707e29c9955-13712346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557707e2b503b0_94023717',
  'variables' => 
  array (
    '_arrayData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557707e2b503b0_94023717')) {function content_557707e2b503b0_94023717($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['_arrayData']->value['data'])==0) {?>
  <tr>
    <td colspan="3" class="text-center">Ningún registro encontrado</td>
  </tr>
<?php } else { ?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_arrayData']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['idWeek'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
    <td>
      <button type="button" class="btn btn-default btn-xs" title = "Editar Semana" onclick="modEditWeek(<?php echo $_smarty_tpl->tpl_vars['item']->value['idWeek'];?>
)">
        <span class="glyphicon glyphicon-pencil"></span>
      </button>
      <button type="button" class="btn btn-default btn-xs" title = "Eliminar Semana" onclick="deleteWeek(<?php echo $_smarty_tpl->tpl_vars['item']->value['idWeek'];?>
)">
        <span class="glyphicon glyphicon-trash"></span>
      </button>
    
    </td>
  </tr>
  <?php } ?>
<?php }?><?php }} ?>
