<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 01:08:53
         compiled from "C:\wamp\www\ejemplo\application\views\elements\form_destination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150105570d3b9981c17-80666221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38a0ef8b98d602516e99d4b6654cb046c53c13d' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\elements\\form_destination.tpl',
      1 => 1433459265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150105570d3b9981c17-80666221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5570d3b9b46e86_26649506',
  'variables' => 
  array (
    '_textTitle' => 0,
    '_arrayData' => 0,
    '_operation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570d3b9b46e86_26649506')) {function content_5570d3b9b46e86_26649506($_smarty_tpl) {?>      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault"><?php echo $_smarty_tpl->tpl_vars['_textTitle']->value;?>
</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form name="frmDestination" id="frmDestination" method="POST" onsubmit="javascript:void(0)" autocomplete="off">
        <div class="form-group">
          <label for="destination_name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="destination_name" name="destination_name" required="required" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['name'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['_operation']->value=="update") {?>
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['idDestination'];?>
" id="idDestination" name="idDestination">
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
