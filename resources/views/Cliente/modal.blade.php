<div class="modal face modal-slide-in-right" aria_hidden="true" role="dialog" tabindex="-1" id="model-delete-{{$cli->idCliente}}">
{{form::Open(array('action'=>array('ClienteController@destroy',$cli->idCliente), 'method'=>'delete'))}}
<div class="modal-dialog"">
<div class="modal-content">
<div class="modal-header"></div>
</div></div>
{{Form::Close()}}
</div>