 {*} <div class="container theme-showcase" role="main">
      <div id="txtErrMsg"></div>
  </div>{*}
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-11">
      <table class="table" class="col-md-11">
        <thead>
          <th colspan="10">
            
            <button type="button" class="btn btn-default" id="addHabitation">
              <b>Agregar Nueva Habitación</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número</th>
          <th class="col-md-3">Destino</th>
          <th class="col-md-3">Lobby</th>
          <th class="col-md-3">Habitación</th>
          <th class="col-md-1">Acciones</th>
        </thead>
        <tbody id = "contentData">
        {include file=$_urlBoxContent}
        <tbody>
      </table>
  </div>
</div>
<div class="container theme-showcase" role="main">
  <div id="stLoader_bar"  class="col-md-6"></div>
</div>

<div class="container theme-showcase" role="main">
  <div id="contentPaginator">
    {if $_urlPaginator}
      {include file=$_urlPaginator}
    {/if}
  </div>
</div>
