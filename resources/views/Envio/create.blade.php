@extends('layouts.layout')
@section('content')
<title>Registrar Envio</title>
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
					<h3 class="panel-title">Nuevo Envio</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Envio.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Descripción" required>
									</div>
								
								
									<div class="form-group">
										<input type="text" name="mensaje" id="mensaje" class="form-control input-sm" placeholder="Mensaje" required>
									</div>
								
							
									<div class="form-group">
										<input type="text" name="fecha_envio" id="fecha_envio" class="form-control input-sm" placeholder="Fecha para la que desea el envio" required>
									</div>
								
                              
									<div class="form-group">
										<input type="text" name="destinatario" id="destinatario" class="form-control input-sm" placeholder="Nombre del destinatario">
									</div>
									
									<div class="form-group">
										<input type="text" name="telDestinatario" id="telDestinatario" class="form-control input-sm" placeholder="Telefono del destinatario">
									</div>

									<div class="form-group">
										<input type="text" name="direcDestinatario" id="direcDestinatario" class="form-control input-sm" placeholder="Dirección del destinatario">
									</div>
									
								</div>
							</div>

							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Envio.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection