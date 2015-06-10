<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 23:50:41
         compiled from "C:\wamp\www\ejemplo\application\views\elements\form_habitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2148355775d2b62ec88-24139648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3285ea82bb0d35ac3d76c93daa0ee3465ac185bb' => 
    array (
      0 => 'C:\\wamp\\www\\ejemplo\\application\\views\\elements\\form_habitation.tpl',
      1 => 1433886639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148355775d2b62ec88-24139648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55775d2baaf301_53722418',
  'variables' => 
  array (
    '_textTitle' => 0,
    '_enumDestination' => 0,
    'item' => 0,
    '_arrayData' => 0,
    '_operation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55775d2baaf301_53722418')) {function content_55775d2baaf301_53722418($_smarty_tpl) {?>      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault"><?php echo $_smarty_tpl->tpl_vars['_textTitle']->value;?>
</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form name="frmLobby" id="frmLobby" method="POST" onsubmit="javascript:void(0)" autocomplete="off">
        <div class="form-group">
          <label for="idDestination" class="control-label">Destino:</label>
          
            <select name = "idDestination" id="idDestination" class="form-control" >
                <option disabled="disabled" selected = "selected">Selecciona un destino</option>
          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_enumDestination']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idDestination'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['idDestination']==$_smarty_tpl->tpl_vars['_arrayData']->value['idDestination']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['destinationName'];?>
 </option>
            <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                <option value="">Ningún destino encontrado </option>
          <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
          <label for="idLobby" class="control-label">Lobby:</label>
          
            <select name = "idLobby" id="idLobby" class="form-control" >
              <option disabled="disabled" selected = "selected">Selecciona un destino</option>
          
            </select>
        </div>
        
        <div class="form-group">
          <label for="lobby_name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="lobby_name" name="lobby_name" required="required" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['name'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['_operation']->value=="update") {?>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_arrayData']->value['idLobby'];?>
" id="idLobby" name="idLobby">
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
      <!--fin default--><?php }} ?>
