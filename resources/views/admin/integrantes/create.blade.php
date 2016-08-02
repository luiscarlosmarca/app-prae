@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Nuevo Integrante</h1> </div>
				<div class="panel-body">
					@include('error')
					{!!Form::open(['route'=>'integrantes.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}

						@include('admin.integrantes.partials.fields')				
					
						<button type="submit" class="btn btn-primary">
											Crear Integrante
						</button>

									
					{!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>

@endsection
