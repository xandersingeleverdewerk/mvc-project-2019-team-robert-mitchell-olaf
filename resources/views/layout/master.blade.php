<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pretpark HappyLand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/scss/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scss/main.css') }}">
</head>
<body>
<nav class="nav">
    <div class="logo">

    </div>
    <div class="container">
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills nav-justified" role="tablist">
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