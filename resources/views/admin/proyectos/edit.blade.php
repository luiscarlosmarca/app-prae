@extends('app')
@section('title')
Editar Proyecto
@stop
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar Proyecto</b></div>
				@include('error')
				<div class="panel-body">
					

					{!!Form::model($proyecto,['route'=>['proyectos.update',$proyecto], 'method' => 'PATCH']) !!} 

					<div class="panel panel-default">
					  
					  <div class="panel-body">
					  
					   @include('admin.proyectos.partials.fields')
					  </div>
					</div>	
						
					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					<center>  <img src="/upload/{{$proyecto->imagen}}" >
					  
					  </div>
					</div>	
						
							
								
							
												
								
								
					<div class="col-sm-6">
					<button type="submit" class="btn btn-primary">Actualizar datos</button>
									 {!!Form::close() !!} 
									 
					</div>


								
						
					</div>
								
						
			
				</div>
</div></div>
</div>
@endsection