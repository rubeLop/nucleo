<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 21:33:20
         compiled from "C:\wamp\www\ejemplo\application\views\contentbox\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176555568c87eb722a0-80767897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5633e1772071018698b847c2d623036f2ef6234c' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\contentbox\\error.tpl',
      1 => 1432841790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176555568c87eb722a0-80767897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5568c87edb83a9_84562995',
  'variables' => 
  array (
    'arrayError' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5568c87edb83a9_84562995')) {function content_5568c87edb83a9_84562995($_smarty_tpl) {?>   <?php if (count($_smarty_tpl->tpl_vars['arrayError']->value)>0) {?>
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
