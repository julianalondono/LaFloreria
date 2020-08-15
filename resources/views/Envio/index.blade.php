@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Envios</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Envio.create') }}" class="btn btn-info" > + Añadir Envio</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Identificación</th>
               <th>Descripcion</th>
               <th>Mensaje</th>
               <th>Fecha_envio</th>
               <th>Destinatario</th>
               <th>Teléfono</th>
               <th>Dirección</th>

               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($envio->count())  
              @foreach($envio as $env)  
              <tr>
              <td>{{$env->idEnvio}}</td>
              <td>{{$env->Desccripcion}}</td>
                <td>{{$env->Mensaje}}</td>
                <td>{{$env->Fecha_envio}}</td>
                <td>{{$env->Destinatario}}</td>
                <td>{{$env->TelDestinatario}}</td>
                <td>{{$env->DirecDestinatario}}</td>

                
                <td><a class="btn btn-primary btn-xs" href="{{action('EnvioController@edit', $env->idEnvio)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EnvioController@destroy', $env->idEnvio)}}" method="post">
                   {{csrf_field()}}
                   @method('DELETE')
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
      {{ $envio->links() }}
    </div>
  </div>
</section>
 
@endsection