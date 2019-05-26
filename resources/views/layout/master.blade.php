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
<h1 class="title">Pretpark HappyLand</h1>
<br>
<nav class="nav">
    <div class="container">
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="{{ url('/master') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="{{ url('/park') }}">Het Park</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="{{ url('/contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="{{ url('/mijnpagina') }}">Mijn Pagina</a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')

@extends('layout.footer')
</body>
</html>