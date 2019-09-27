<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>


<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<style>
html, body {
background-color: #fff;
color: #636b6f;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
}

.full-height {
height: 100vh;
}

.flex-center {
align-items: center;
display: flex;
justify-content: center;
}

.position-ref {
position: relative;
}

.top-right {
position: absolute;
right: 10px;
top: 18px;
}

.content {
text-align: center;
}

.title {
font-size: 84px;
}

.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}

.m-b-md {
margin-bottom: 30px;
}
</style>
</head>
<body>
<div class="flex-center position-ref full-height">
@if (Route::has('login'))
<div class="top-right links">
@auth
<a href="{{ url('/home') }}">Home</a>
@else
<a href="{{ route('login') }}">Login</a>

@if (Route::has('register'))
<a href="{{ route('register') }}">Register</a>
@endif
@endauth
</div>
@endif

<div class="content">
<div class="title m-b-md">
Laravel
</div>

<div class="links">
<a href="https://laravel.com/docs">Docs</a>
<a href="https://laracasts.com">Laracasts</a>
<a href="https://laravel-news.com">News</a>
<a href="https://blog.laravel.com">Blog</a>
<a href="https://nova.laravel.com">Nova</a>
<a href="https://forge.laravel.com">Forge</a>
<a href="https://github.com/laravel/laravel">GitHub</a>
</div>
</div>
</div>
</body>
</html> -->
@extends('layouts.app')

@section('content')
<?php
// session_start();
// ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Game Quiz</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<script>
function Refresh(){

    window.location.reload();

}
</script>
<body>

    <div class="container" >
        <h1 align="center">Login</h1>
        @if(session()->get('success'))
        <div  class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
        @endif

        @if(session()->get('error'))
        <div   class="alert alert-danger">
            {{ session()->get('error') }}
        </div><br />
        @endif
        <form  class="form-horizontalz" method="POST" action="{{ route('login') }}">
            <input type="hidden"required="" name="_token" value="<?php echo csrf_token(); ?>">

            <div  class="col-md-6"  style="align-items: auto;">
                <fieldset >
                    <div>
                        <input type="text" name="stremailusuario" required placeholder="Digite seu e-mail" class="form-control">
                    </div>
                </fieldset>
                <br>
                <fieldset  >
                    <div >
                        <input type="password" name="strsenha" required placeholder="Digite sua senha" class="form-control">
                    </div>
                </fieldset>
                <br>

                <fieldset align="center" >
                    <div >
                        <input type="submit" class="btn btn-primary" value="Login"/>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
    <a href="/cadastro">Criar Conta</a>
    <a  href="{{ route('logout') }}" class="dropdown-item">
        <i class="ft-power"></i> Sair
    </a>

    <!-- <div class="container" >

    <div class="content-wrapper">

    <form class="form-group"  align="center" action="autenticalg.php" method="POST">

    <h1 >Login</h1>
    <div class="card-body collapse in">
    <fieldset class="form-group row">
    <div  class="col-md-6 col-xs-12 text-xs-center text-sm-left">
    <input type="email" name="email" placeholder="Digite seu e-mail" class="form-control">
</div>
</fieldset>

<fieldset class="form-group row">
<div class="col-md-6 col-xs-12 text-xs-center text-sm-left">
<input type="password" name="senha" placeholder="Digite sua senha" class="form-control">
</div>
</fieldset>

<fieldset class="form-group row">
<div class="col-md-6 col-xs-12 text-xs-center text-sm-left">
<input type="submit" class="btn btn-primary" value="Login"/>
</div>
</fieldset>

<fieldset class="form-group row">
<div class="col-md-6 col-xs-12 text-xs-center text-sm-left">
<a href="cadastro.php" class="btn btn-signin">Cadastrar Usuario</a>
</div>
</fieldset>

</div>
</form>

</div>
</div> -->

</body>
</html>
@endsection
