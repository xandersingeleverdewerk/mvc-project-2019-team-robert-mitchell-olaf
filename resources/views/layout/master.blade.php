<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pretpark HappyLand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/scss/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scss/main.css') }}">
</head>
<body>
<nav class="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 navButton">
                <button class="hamburger btn btn-lg btn-primary" type="button" data-toggle="collapse" data-target="#navigation">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
            <div class="col-4 col-md-3 logo">
                <img alt="logo" class="navImg mx-auto d-block rounded-circle" src="{{asset('images/happy.jpg')}}">
            </div>
            <div class="col-12 col-md-6 search">
                <h1 class="navTitle">Pretpark HappyLand</h1>
                <form id="search" action="#" method="POST">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Zoeken voor iets">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Zoeken</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4 col-md-3 register">
                <div class="dropdown dropleft">
                    <img alt="portaal" data-toggle="dropdown" class="navImg mx-auto d-block rounded-circle" src="{{asset('images/login.png')}}">
                    <div class="dropdown-menu">
                        {{--hier komen de linkjes voor de authenticate--}}
                        <a class="dropdown-item" href="#">Register</a>
                        <a class="dropdown-item" href="#">Log in</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <ul class="flex-column flex-md-row nav nav-pills nav-justified collapse navbar-collapse" id="navigation">
            <li class="nav-item">
                <a class="nav-link {{ Request::url() == url('/master') ? 'active' : '' }}" href="{{ url('/master') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::url() == url('/park') ? 'active' : '' }}" href="{{ url('/park') }}">Het Park</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::url() == url('/contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ Request::url() == url('/mijnpagina') ? 'active' : '' }} href="{{ url('/mijnpagina') }}">Mijn Pagina</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

@extends('layout.footer')
</body>
</html>