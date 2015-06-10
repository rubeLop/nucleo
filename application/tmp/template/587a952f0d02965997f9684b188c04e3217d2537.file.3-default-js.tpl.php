<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-03 19:18:54
         compiled from "C:\wamp\www\ejemplo\application\views\layout\cotizador\3-default-js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237205567983feb8138-35637277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '587a952f0d02965997f9684b188c04e3217d2537' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\layout\\cotizador\\3-default-js.tpl',
      1 => 1433351931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237205567983feb8138-35637277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5567984007f770_92310493',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_jsController' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567984007f770_92310493')) {function content_5567984007f770_92310493($_smarty_tpl) {?>    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['route_js'];?>
jquery-2.1.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['route_bootstrap'];?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['route_js'];?>
jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['route_js'];?>
js_config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['route_js'];
echo $_smarty_tpl->tpl_vars['_jsController']->value;?>
.js"><?php echo '</script'; ?>
>
    
    <?php }} ?>
