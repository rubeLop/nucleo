<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 00:04:45
         compiled from "C:\wamp\www\ejemplo\application\views\lobby\_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335655721373377530-09768754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2bc8620049b7ff4f53dbcf36f988609dce6223' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\lobby\\_rows.tpl',
      1 => 1433801081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335655721373377530-09768754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557213734e2a14_92304752',
  'variables' => 
  array (
    '_arrayData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557213734e2a14_92304752')) {function content_557213734e2a14_92304752($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['_arrayData']->value['data'])==0) {?>
  <tr>
    <td class="col-md-10">Ningún registro encontrado</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['idLobby'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['destinationName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lobbyName'];?>
</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar Lobby" onclick="modEditLobby(<?php echo $_smarty_tpl->tpl_vars['item']->value['idLobby'];?>
)">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar Lobby" onclick="deleteLobby(<?php echo $_smarty_tpl->tpl_vars['item']->value['idLobby'];?>
)">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    
        </td>
      </tr>
  <?php } ?>
<?php }?><?php }} ?>
