@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Flores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Flor.create') }}" class="btn btn-info" > + Añadir Flor</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Id</th>
               <th>Nombre</th>
               <th>Precio por unidad</th>
          
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($flor->count())  
              @foreach($flor as $fl)  
              <tr>
              
                <td>{{$fl->idFlor}}</td>
                <td>{{$fl->Nombre}}</td>
                <td>{{$fl->Precio_unitario}}</td>

                
                <td><a class="btn btn-primary btn-xs" href="{{action('FlorController@edit', $fl->idFlor)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('FlorController@destroy', $fl->idFlor)}}" method="post">
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
      {{ $flor->links() }}
    </div>
  </div>
</section>
 
@endsection