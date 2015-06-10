{if count($_arrayData.data) eq 0}
  <tr>
    <td class="col-md-10">Ningún registro encontrado</td>
  </tr>
{else}
  {foreach from = $_arrayData.data item = item key = key}
     <tr>
        <td>{$item.idLobby}</td>
        <td>{$item.destinationName}</td>
        <td>{$item.lobbyName}</td>
        <td>
          <button type="button" class="btn btn-default btn-xs" title="Editar Lobby" onclick="modEditLobby({$item.idLobby})">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button type="button" class="btn btn-default btn-xs" title="Eliminar Lobby" onclick="deleteLobby({$item.idLobby})">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
    {*}<button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-align-justify"></span>
    </button>{*}
        </td>
      </tr>
  {/foreach}
{/if}