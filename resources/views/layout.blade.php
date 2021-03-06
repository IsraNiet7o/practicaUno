<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeachMe by duilio.me</title>
    
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:300,700') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="notifications"></div>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://duilio.me" target="_blank">duilio.me</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li role="presentation">
                            <a href="http://tickets.app">Recientes</a>
                        </li>
                        <li role="presentation">
                            <a href="http://tickets.app/populares">Populares</a>
                        </li>
                        <li role="presentation">
                            <a href="http://tickets.app/pendientes">Abiertas</a>
                        </li>
                        <li role="presentation">
                            <a href="http://tickets.app/tutoriales">Finalizadas</a>
                        </li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Duilio Palacios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://tickets.app/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')




<!-- Scripts -->
{!! Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
{!! Html::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js') !!}

</body>
</html>