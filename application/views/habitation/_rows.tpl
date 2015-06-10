{if count($_arrayData.data) eq 0}
  <tr>
    <td colspan="5" class="col-md-11 text-center" >Ningún registro encontrado</td>
  </tr>
{else}
  {foreach from = $_arrayData.data item = item key = key}
     <tr>
        <td>{$item.idHabitation}</td>
        <td>{$item.destinationName}</td>
        <td>{$item.lobbyName}</td>
        <td>{$item.habitationName}</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar Habitación" onclick="modEditHabitation({$item.idHabitation})">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar" onclick="deleteHabitation({$item.idHabitation})">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    {*}<button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-align-justify"></span>
    </button>{*}
        </td>
      </tr>
  {/foreach}
{/if}