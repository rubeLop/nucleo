  <div class="clearfix"></div>
  <ul class="pagination">
    {if $_arrayData.pagination.first}
      <li><a href="javascript:void(0)" onclick="paginator({$_arrayData.pagination.first})">Primero</a></li>
      {else}
      <li class="disabled"><a href="javascript:void(0)">Primero</a></li>
    {/if}    
    {if $_arrayData.pagination.back}
      <li><a href="javascript:void(0)" onclick="paginator({$_arrayData.pagination.back})">Anterior</a></li>
      {else}
      <li class="disabled"><a href="javascript:void(0)">Anterior</a></li>
    {/if}
    
    {foreach from = $_arrayData.rank item = value}
      <li {if $value eq $_arrayData.pagination.current} class="active" {/if}><a href="javascript:void(0)" onclick="paginator({$value})">{$value}</a></li>
    {/foreach}

    {if $_arrayData.pagination.next}
      <li><a href="javascript:void(0)" onclick="paginator({$_arrayData.pagination.next})">Siguiente</a></li>
      {else}
      <li class="disabled"><a href="javascript:void(0)">Siguiente</a></li>
    {/if}    
    {if $_arrayData.pagination.last}
      <li><a href="javascript:void(0)" onclick="paginator({$_arrayData.pagination.last})">Último</a></li>
      {else}
      <li class="disabled"><a href="javascript:void(0)">Último </a></li>
    {/if}
  </ul>