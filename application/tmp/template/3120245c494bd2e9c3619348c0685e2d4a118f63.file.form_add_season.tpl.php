<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-03 19:32:15
         compiled from "C:\wamp\www\ejemplo\application\views\elements\form_add_season.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28628556f391bf24501-35316257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3120245c494bd2e9c3619348c0685e2d4a118f63' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\elements\\form_add_season.tpl',
      1 => 1433352733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28628556f391bf24501-35316257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556f391c0dc134_72675848',
  'variables' => 
  array (
    '_textTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f391c0dc134_72675848')) {function content_556f391c0dc134_72675848($_smarty_tpl) {?>      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault"><?php echo $_smarty_tpl->tpl_vars['_textTitle']->value;?>
</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form>
        <div class="form-group">
          <label for="season-name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="season_name">
        </div>
        
      </form>

      <!--default-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
      <!--fin default-->

<?php }} ?>
