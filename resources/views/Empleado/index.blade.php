@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Empleados</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Empleado.create') }}" class="btn btn-info" > + Añadir Empleado</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Identificación</th>
               <th>Teléfono</th>
               <th>Nombre</th>
          
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($empleado->count())  
              @foreach($empleado as $emp)  
              <tr>
              <td>{{$emp->idEmpleado}}</td>
              <td>{{$emp->Telefono}}</td>
                <td>{{$emp->Nombre}}</td>

                
                <td><a class="btn btn-primary btn-xs" href="{{action('EmpleadoController@edit', $emp->idEmpleado)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EmpleadoController@destroy', $emp->idEmpleado)}}" method="post">
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
      {{ $empleado->links() }}
    </div>
  </div>
</section>
 
@endsection