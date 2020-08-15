@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Proveedores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Proveedor.create') }}" class="btn btn-info" >Añadir Proveedores</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Identificación</th>
             <th>Nombre</th>
             <th>Productos</th>
            <th>Dirección</th>  
               <th>Teléfono</th>
          
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($proveedor->count())  
              @foreach($proveedor as $prov)  
              <tr>
              <td>{{$prov->idProveedor}}</td>
              <td>{{$prov->Nombre}}</td>
              <td>{{$prov->Descripcion_producto}}</td>
              <td>{{$prov->Direccion}}</td> 
              <td>{{$prov->Telefono}}</td>
              
                
                <td><a class="btn btn-primary btn-xs" href="{{action('ProveedorController@edit', $prov->idProveedor)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ProveedorController@destroy', $prov->idProveedor)}}" method="post">
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
      {{ $proveedor->links() }}
    </div>
  </div>
</section>
 
@endsection