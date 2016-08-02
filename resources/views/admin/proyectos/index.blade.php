@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-primary">
				<div class="panel-heading">Proyectos | App web Prae 1.0	</div>
					
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

				<div class="panel-body">
				
					@include('admin.proyectos.partials.search')
					@include('admin.proyectos.partials.table')
				</div>
			</div>
		
		</div>

			<p>
 						
 						</p>
	</div>
		<font color="black">
					Numero de proyectos es:
 					{{$proyectos->total()}} 
 					
 			</font>	


</div>
 
@endsection

 

