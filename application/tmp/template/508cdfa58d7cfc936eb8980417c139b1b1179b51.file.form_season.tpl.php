<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 17:55:06
         compiled from "C:\wamp\www\ejemplo\application\views\elements\form_season.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13632556f3a9d55c912-96490727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '508cdfa58d7cfc936eb8980417c139b1b1179b51' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\elements\\form_season.tpl',
      1 => 1433457534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13632556f3a9d55c912-96490727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556f3a9d623cc4_34067460',
  'variables' => 
  array (
    '_textTitle' => 0,
    '_arrayData' => 0,
    '_operation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f3a9d623cc4_34067460')) {function content_556f3a9d623cc4_34067460($_smarty_tpl) {?>      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault"><?php echo $_smarty_tpl->tpl_vars['_textTitle']->value;?>
</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form name="frmSeason" id="frmSeason" method="POST" onsubmit="javascript:void(0)" autocomplete="off">
        <div class="form-group">
          <label for="season_name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="season_name" name="season_name" required="required" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['name'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['_operation']->value=="update") {?>
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['idSeason'];?>
" id="idSeason" name="idSeason">
          <?php }?>
        </div>
      </form>
      <!--default-->
      <div id="stLoader_barMod" style="text-align:center"></div>
      <div id="txtErrMsgMod" ></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" 
        <?php if ($_smarty_tpl->tpl_vars['_operation']->value=="update") {?>
        id="btnUpdate" name="btnUpdate"
        <?php } else { ?>
         id="btnSave" name="btnSave"
        <?php }?> class="btn btn-primary">Guardar</button>
      </div>
      <!--fin default-->

<?php }} ?>
