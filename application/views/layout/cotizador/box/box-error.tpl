   {if count($arrayError) >0}
      <div class="alert alert-danger alert-dismissable col-lg-6">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          {*}<strong>¡Cuidado!</strong> {*}
      {foreach from=$arrayError item=item }
            {$item}<br>
      {/foreach}
      </div>

    {/if}
    {*}<pre>{$arrayError|print_r}<pre>{*}
    {*}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>{*}