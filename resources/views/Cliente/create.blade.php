@extends('layouts.layout')
@section('content')
<title>Registrar Cliente</title>
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Cliente</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Cliente.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="documento" id="documento" class="form-control input-sm" placeholder="Numero de documento" required>
									</div>
								
								
									<div class="form-group">
										<input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Direccion" required>
									</div>
								
							
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre Completo" required>
									</div>
								
                              
									<div class="form-group">
										<input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Número de Telefono">
									</div>
								</div>
							</div>

							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Cliente.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection