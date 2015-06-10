      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault">{$_textTitle}</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form name="frmWeek" id="frmWeek" method="POST" onsubmit="javascript:void(0)" autocomplete="off">
        <div class="form-group">
          <label for="week_name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="week_name" name="week_name" required="required" value="{$_arrayData.name}">
          {if $_operation eq "update"}
          <input type="hidden" value="{$_arrayData.idWeek}" id="idWeek" name="idWeek">
          {/if}
        </div>
      </form>
      <!--default-->
      <div id="stLoader_barMod" style="text-align:center"></div>
      <div id="txtErrMsgMod" ></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" 
        {if $_operation eq "update"}
        id="btnUpdate" name="btnUpdate"
        {else}
         id="btnSave" name="btnSave"
        {/if} class="btn btn-primary">Guardar</button>
      </div>
      <!--fin default-->