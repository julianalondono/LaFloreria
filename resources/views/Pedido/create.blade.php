@extends('layouts.layout')
@section('content')
<title>Registrar Pedido</title>
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
					<h3 class="panel-title">Nuevo Pedido</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Pedido.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="cliente" id="cliente" class="form-control input-sm" placeholder="Cliente" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="fecha" id="fecha" class="form-control input-sm" placeholder="AAAA-MM-DD" required>
									</div>
								</div>

							</div>

							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Pedido.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection