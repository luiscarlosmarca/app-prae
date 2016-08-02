@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Nuevo Proyecto</h1> </div>
				<div class="panel-body">
					@include('error')
					{!!Form::open(['route'=>'proyectos.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}

						@include('admin.proyectos.partials.fields')	
						{!! Form::label('image','Imagen')!!}
									{!! Form::file('imagen',null,['class'=>'form-control'])!!}
									Suba una imagen JPG O PNG MAX 2MB	<br>			
					
						<button type="submit" class="btn btn-primary">
											Crear Proyecto
						</button>

									
					{!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>

@endsection
