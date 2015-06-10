<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 20:35:35
         compiled from "C:\wamp\www\ejemplo\application\views\reservation\_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2473855773139b361b3-35482616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf116c9c60bab9c3649da80e6c9372668b95880d' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\reservation\\_rows.tpl',
      1 => 1433874845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2473855773139b361b3-35482616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55773139cc4914_23730815',
  'variables' => 
  array (
    '_arrayData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55773139cc4914_23730815')) {function content_55773139cc4914_23730815($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['_arrayData']->value['data'])==0) {?>
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
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['idReservation'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
    <td>
      <button type="button" class="btn btn-default btn-xs" title = "Editar tipo de reservación" onclick="modEditReservation(<?php echo $_smarty_tpl->tpl_vars['item']->value['idReservation'];?>
)">
        <span class="glyphicon glyphicon-pencil"></span>
      </button>
      <button type="button" class="btn btn-default btn-xs" title = "Eliminar" onclick="deleteReservation(<?php echo $_smarty_tpl->tpl_vars['item']->value['idReservation'];?>
)">
        <span class="glyphicon glyphicon-trash"></span>
      </button>
    
    </td>
  </tr>
  <?php } ?>
<?php }?><?php }} ?>
