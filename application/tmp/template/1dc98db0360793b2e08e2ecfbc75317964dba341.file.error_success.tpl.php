<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-03 22:34:04
         compiled from "C:\wamp\www\ejemplo\application\views\contentbox\error_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901556f64bc918af2-82842858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dc98db0360793b2e08e2ecfbc75317964dba341' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\contentbox\\error_success.tpl',
      1 => 1433363560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901556f64bc918af2-82842858',
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
  'unifunc' => 'content_556f64bcaf15e7_09569976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f64bcaf15e7_09569976')) {function content_556f64bcaf15e7_09569976($_smarty_tpl) {?>   <?php if (count($_smarty_tpl->tpl_vars['arrayError']->value)>0) {?>
      <div class="alert alert-success alert-dismissable">
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
