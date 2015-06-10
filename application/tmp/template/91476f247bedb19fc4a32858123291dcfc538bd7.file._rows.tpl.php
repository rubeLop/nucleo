<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 23:26:30
         compiled from "C:\wamp\www\ejemplo\application\views\habitation\_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27402557759843b7f76-06495249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91476f247bedb19fc4a32858123291dcfc538bd7' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\habitation\\_rows.tpl',
      1 => 1433885183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27402557759843b7f76-06495249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557759845bb9f9_22329690',
  'variables' => 
  array (
    '_arrayData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557759845bb9f9_22329690')) {function content_557759845bb9f9_22329690($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['_arrayData']->value['data'])==0) {?>
  <tr>
    <td colspan="5" class="col-md-11 text-center" >Ningún registro encontrado</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['idHabitation'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['destinationName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lobbyName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['habitationName'];?>
</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar Habitación" onclick="modEditHabitation(<?php echo $_smarty_tpl->tpl_vars['item']->value['idHabitation'];?>
)">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar" onclick="deleteHabitation(<?php echo $_smarty_tpl->tpl_vars['item']->value['idHabitation'];?>
)">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    
        </td>
      </tr>
  <?php } ?>
<?php }?><?php }} ?>
