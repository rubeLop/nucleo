      <!--default-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalSaveDefault">{$_textTitle}</h4>
      </div>
      <div class="modal-body">
      <!-- fin default-->
      <form name="frmSeason" id="frmSeason" method="POST" onsubmit="javascript:void(0)" autocomplete="off">
        <div class="form-group">
          <label for="season_name" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="season_name" name="season_name" required="required" value="{$_arrayData.name}">
          {if $_operation eq "update"}
          <input type="hidden" value="{$_arrayData.idSeason}" id="idSeason" name="idSeason">
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

