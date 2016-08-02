
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Acceso |  PRAE </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" media="all" />
            {!!Html::style('css/style.css')!!}
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        

         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Por favor corrige los errores<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        <div class="login-wrap">
            
            <div class="login">
                    <div class="avatar">    </div>

                    
                    <form id="login" class="login-form" method="POST" action="{{ url('/auth/login') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" class="pass" placeholder="Contraseña">
                        <button type="submit">Entrar</button>
                
                        <span class="arrow">&rarr;</span>

                    </form>

            </div>
        </div>

<br>
<div class="wrap"> Proyecto ambiental escolar</a><br /><span class="info">INSTITUTO RENAN BARCO</span></div>
    

<div class="hint">Acceso a la App web.</div>




        <!-- Javascript -->
        <script src="js/jquery.js"></script>
      
    </body>

</html>

