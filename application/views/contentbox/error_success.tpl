   {if count($arrayError) >0}
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          {*}<strong>¡Cuidado!</strong> {*}
      {foreach from=$arrayError item=item }
            {$item}<br>
      {/foreach}
      </div>

    {/if}
    
    {*}<pre>{$arrayError|print_r}<pre>{*}

