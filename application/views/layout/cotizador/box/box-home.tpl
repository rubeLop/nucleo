<div class="table-responsive">
   <table class="table">
    <thead>
        <th class="text-center">Lobby</th>
        <th class="text-center">Periodo Booking windows</th>
        <th class="text-center">Periodo Travel windows</th>
        <th class="text-center">Descuento aplicable</th>
      </thead>
      <tbody>
      {if count($arrayVal.descuento) >0}
    {foreach from=$arrayVal.descuento item=item key=key} 
       <tr>
        <td >{$item.name}</td>
        <td class="text-center">{$objUtil->FormatDateMySql($item.startDateBw)} <b>A</b> {$objUtil->FormatDateMySql($item.finishDateBw)}</td>
        <td class="text-center">{$objUtil->FormatDateMySql($item.startDateTw)} <b>A</b> {$objUtil->FormatDateMySql($item.finishDateTw)}</td>
        <td class="text-center"><b>{$item.nameDiscount} %</b></td>
      </tr>       
    {/foreach}
    {else}
    <tr>
      <td colspan="4" class="text-center" >Ningun registro encontrado</td>
    </tr>       
    {/if}
    </tbody>
  </table>
  <tfoot>
    <tr>
    </tr>
  </tfoot>
</div>

<div class="table-responsive">
   <table class="table">
    <thead>
        <th class="text-center">Destino</th>
        <th class="text-center">Temporada</th>
      </thead>
      <tbody>
      {if count($arrayVal.temporada) >0}
    {foreach from=$arrayVal.temporada item=item key=key} 
       <tr>
        <td class="text-center">{$item.nameDestination}</td>
        <td class="text-center">{$item.nameSeason} </td>
        
      </tr>       
    {/foreach}
    {else}
    <tr>
      <td colspan="2" class="text-center" >Ningun registro encontrado</td>
    </tr>       
    {/if}
    </tbody>
  </table>
  <tfoot>
    <tr>
    </tr>
  </tfoot>
</div>

{*}<pre>{$arrayVal|print_r}<pre>{*}
{*}{count($arrayVal.descuento)}{*}
