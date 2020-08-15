@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Pedidos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Pedido.create') }}" class="btn btn-info" > + Añadir Pedido</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Id</th>
               <th>Fecha</th>
               <th>Cliente</th>
          
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($pedido->count())  
              @foreach($pedido as $pe)  
              <tr>
              
                <td>{{$pe->idPedido}}</td>
                <td>{{$pe->Fecha}}</td>
                <td>{{$pe->idCliente}}</td>


                
                <td><a class="btn btn-primary btn-xs" href="{{action('PedidoController@edit', $pe->idPedido)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('PedidoController@destroy', $pe->idPedido)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $pedido->links() }}
    </div>
  </div>
</section>
 
@endsection