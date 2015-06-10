<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 01:01:49
         compiled from "C:\wamp\www\ejemplo\application\views\season\_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4082556e0dbac73df2-07804549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ba0eadda79e697bcc97bfdfd5d077f68c96e10' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\season\\_rows.tpl',
      1 => 1433372489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4082556e0dbac73df2-07804549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556e0dbadbfeb5_84260950',
  'variables' => 
  array (
    '_arrayData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556e0dbadbfeb5_84260950')) {function content_556e0dbadbfeb5_84260950($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['_arrayData']->value['data'])==0) {?>
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['idSeason'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar temporada" onclick="modEditSeason(<?php echo $_smarty_tpl->tpl_vars['item']->value['idSeason'];?>
)">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar temporada" onclick="deleteSeason(<?php echo $_smarty_tpl->tpl_vars['item']->value['idSeason'];?>
)">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    
        </td>
      </tr>
  <?php } ?>
<?php }?><?php }} ?>
