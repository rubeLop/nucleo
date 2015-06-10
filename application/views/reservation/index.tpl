 {*} <div class="container theme-showcase" role="main">
      <div id="txtErrMsg"></div>
  </div>{*}
  <div class="container theme-showcase" role="main">
  <div id="txtError"></div>
  <div class="clearfix"></div>
  <div class="table-responsive col-md-6">
      <table class="table">
        <thead>
          <th colspan="3">
            
            <button type="button" class="btn btn-default" id="addReservation">
              <b>Agregar Nuevo</b> <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
          </th>
        </thead>
        <thead>
          <th class="col-md-1">Número</th>
          <th class="col-md-4">Tipo de reservación</th>
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
