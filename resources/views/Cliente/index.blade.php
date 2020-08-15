@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Clientes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Cliente.create') }}" class="btn btn-info" > + Añadir Cliente</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Identificación</th>
               <th>Dirección</th>
               <th>Nombre</th>
               <th>Teléfono</th>
          
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($cliente->count())  
              @foreach($cliente as $cli)  
              <tr>
              <td>{{$cli->idCliente}}</td>
              <td>{{$cli->Direccion}}</td>
              <td>{{$cli->Nombre}}</td>
              <td>{{$cli->Telefono}}</td>
              
                
                <td><a class="btn btn-primary btn-xs" href="{{action('ClienteController@edit', $cli->idCliente)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ClienteController@destroy', $cli->idCliente)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $cliente->links() }}
    </div>
  </div>
</section>
 
@endsection