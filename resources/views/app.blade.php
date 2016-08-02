<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Proyecto ambiental Escolar| PRAE')</title>

	{!!Html::style('css/app.css')!!}
	{!!Html::style('css/style.css')!!}
	<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>Lu15C4r!0$M4rC4
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
				   

			<div class="navbar-header">
					      <a class="navbar-brand" href="/www/index.html">
					       PRAE
					      </a>
					     
		  <!-- /MENU -->
							   
							    <div class="btn-group">
							      <button type="button" class="btn btn-primary">Integrantes</button>
							      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							        <span class="caret"></span>
							        <span class="sr-only">Toggle Dropdown</span>
							      </button>
							      <ul class="dropdown-menu">
							        <li><a href="/crear-integrante">Crear Integrantes</a></li>
							        <li><a href="/integrantes">Listado de Integrantes</a></li>
							       
							      </ul>
							    </div><!-- /btn-group -->
							   <div class="btn-group">
							      <button type="button" class="btn btn-primary">Proyectos</button>
							      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							        <span class="caret"></span>
							        <span class="sr-only">Toggle Dropdown</span>
							      </button>
							      <ul class="dropdown-menu">
							        <li><a href="/crear-proyecto">Crear Proyectos</a></li>
							        <li><a href="/proyectos">Listado de Proyectos</a></li>
							       
							      </ul>
							    </div>
							 
		    
		  
			</div>

		  <!-- /USUARIO -->
						<ul class="nav navbar-nav navbar-right">
							@if (Auth::guest())
								<li><a href="{{ url('/auth/login') }}">Iniciar Sección</a></li>
								<!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
							@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/auth/logout') }}">Cerrar sección</a></li>
									</ul>
								</li>
							@endif
						</ul>
		</div>


	</nav>


	@yield('content')


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	 <!-- Javascript -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>
</html>
