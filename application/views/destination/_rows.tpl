{if count($_arrayData.data) eq 0}
  <tr>
    <td>Ningún registro encontrado</td>
  </tr>
{else}
  {foreach from = $_arrayData.data item = item key = key}
     <tr>
        <td>{$item.idDestination}</td>
        <td>{$item.name}</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar destino" onclick="modEditDestination({$item.idDestination})">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar destino" onclick="delDestination({$item.idDestination})">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    {*}<button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-align-justify"></span>
    </button>{*}
        </td>
      </tr>
  {/foreach}
{/if}