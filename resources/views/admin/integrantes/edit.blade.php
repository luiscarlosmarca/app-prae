@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar integrante</b></div>

						@include('error')

						{!!Form::model($integrante,['route'=>['integrantes.update',$integrante], 'method' => 'PATCH']) !!} 
					<div class="panel panel-default">
						  <div class="panel-body">
						 
							@include('admin.integrantes.partials.fields')	
						 </div>

						<div class="col-sm-6">
										<button type="submit" class="btn btn-primary">Actualizar datos</button>
										 {!!Form::close() !!} 
										 
						</div>
					</div>
				
					

			</div>
		</div>
	</div>
</div>
@endsection