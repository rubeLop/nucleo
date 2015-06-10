<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-03 19:18:54
         compiled from "C:\wamp\www\ejemplo\application\views\layout\cotizador\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307895567983fb2dc67-99038228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e36bd0ca73a71ab6407ec6dfca7aa644b6a8fd5' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\layout\\cotizador\\template.tpl',
      1 => 1433351854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307895567983fb2dc67-99038228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5567983fd299d4_02375587',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567983fd299d4_02375587')) {function content_5567983fd299d4_02375587($_smarty_tpl) {?><!DOCTYPE html> 
<html> 
<head> 
<?php echo $_smarty_tpl->getSubTemplate ("1-default-meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("2-default-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate ("3-default-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<title><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_title'];?>
</title> 
</head> 
<body role="document">
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container theme-showcase" role="main">
      
      <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    
    <div class="container theme-showcase" role="main">
        <div id="stLoader" class="stHidden"></div>
    </div>
    
    <div class="container theme-showcase" role="main">
      <div id="txtErrMsg"></div>
    </div>
    
    <div id="contenido" class="container theme-showcase" role="main"></div>
    
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_layoutParams']->value['route_modal'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
</body> 
</html><?php }} ?>
