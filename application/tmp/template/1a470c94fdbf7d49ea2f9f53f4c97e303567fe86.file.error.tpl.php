<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-29 00:36:37
         compiled from "C:\wamp\www\ejemplo\application\views\contentbox\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158155679875611733-44386575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a470c94fdbf7d49ea2f9f53f4c97e303567fe86' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\contentbox\\error.tpl',
      1 => 1432841788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158155679875611733-44386575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arrayError' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556798757b3710_46838329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556798757b3710_46838329')) {function content_556798757b3710_46838329($_smarty_tpl) {?>   <?php if (count($_smarty_tpl->tpl_vars['arrayError']->value)>0) {?>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrayError']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
      <?php } ?>
      </div>

    <?php }?>
    
    
    <?php }} ?>
