<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 01:06:37
         compiled from "C:\wamp\www\ejemplo\application\views\destination\_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6345570d068a2f5b2-68283430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41bed91cabfcad3f78036166645c8564cc05f53' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\destination\\_rows.tpl',
      1 => 1433459183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6345570d068a2f5b2-68283430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5570d068c7d3c2_63766386',
  'variables' => 
  array (
    '_arrayData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570d068c7d3c2_63766386')) {function content_5570d068c7d3c2_63766386($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['_arrayData']->value['data'])==0) {?>
  <tr>
    <td>Ningún registro encontrado</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['idDestination'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar destino" onclick="modEditDestination(<?php echo $_smarty_tpl->tpl_vars['item']->value['idDestination'];?>
)">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar destino" onclick="delDestination(<?php echo $_smarty_tpl->tpl_vars['item']->value['idDestination'];?>
)">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    
        </td>
      </tr>
  <?php } ?>
<?php }?><?php }} ?>
