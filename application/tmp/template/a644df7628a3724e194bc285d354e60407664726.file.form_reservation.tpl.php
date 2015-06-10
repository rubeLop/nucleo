<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 21:07:57
         compiled from "C:\wamp\www\ejemplo\application\views\elements\form_reservation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315465577398d9805c6-86886829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a644df7628a3724e194bc285d354e60407664726' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\elements\\form_reservation.tpl',
      1 => 1433876331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315465577398d9805c6-86886829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_textTitle' => 0,
    '_arrayData' => 0,
    '_operation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5577398dba3447_42534972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577398dba3447_42534972')) {function content_5577398dba3447_42534972($_smarty_tpl) {?>      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault"><?php echo $_smarty_tpl->tpl_vars['_textTitle']->value;?>
</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form name="frmReservation" id="frmReservation" method="POST" onsubmit="javascript:void(0)" autocomplete="off">
        <div class="form-group">
          <label for="reservation_name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="reservation_name" name="reservation_name" required="required" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['name'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['_operation']->value=="update") {?>
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['idReservation'];?>
" id="idReservation" name="idReservation">
          <?php }?>
        </div>
      </form>
      <!--default-->
      <div id="stLoader_barMod" style="text-align:center"></div>
      <div id="txtErrMsgMod" ></div>
      </div>
      <div class="modal-footer">
        <button type="button" class = "btn btn-default" data-dismiss = "modal">Cancelar</button>
        <button type="button" 
        <?php if ($_smarty_tpl->tpl_vars['_operation']->value=="update") {?>
        id="btnUpdate" name="btnUpdate"
        <?php } else { ?>
         id="btnSave" name="btnSave"
        <?php }?> class="btn btn-primary">Guardar</button>
      </div>
      <!--fin default--><?php }} ?>
