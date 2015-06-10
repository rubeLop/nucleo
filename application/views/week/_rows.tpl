{if count($_arrayData.data) eq 0}
  <tr>
    <td colspan="3" class="text-center">Ningún registro encontrado</td>
  </tr>
{else}
  {foreach from = $_arrayData.data item = item key = key}
  <tr>
    <td>{$item.idWeek}</td>
    <td>{$item.name}</td>
    <td>
      <button type="button" class="btn btn-default btn-xs" title = "Editar Semana" onclick="modEditWeek({$item.idWeek})">
        <span class="glyphicon glyphicon-pencil"></span>
      </button>
      <button type="button" class="btn btn-default btn-xs" title = "Eliminar Semana" onclick="deleteWeek({$item.idWeek})">
        <span class="glyphicon glyphicon-trash"></span>
      </button>
    {*}
      <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-align-justify"></span>
      </button>
    {*}
    </td>
  </tr>
  {/foreach}
{/if}