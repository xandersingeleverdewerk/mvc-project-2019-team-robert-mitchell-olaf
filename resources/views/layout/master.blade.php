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
                            <button disabled class="btn btn-primary" type="submit">Zoeken</button>
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
    <div class="container-fluid">
        <ul class="flex-column flex-md-row nav nav-pills nav-justified collapse navbar-collapse" id="navigation">
            <li class="nav-item">
                <a class="nav-link {{ Request::url() == url('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
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

<footer class="footer text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 links">
                <h3>Belangrijke Links</h3>
                <ul class="footerList">
                    <li class="footerItem"><a class="footerLink" href="{{url('/link')}}">Link 1</a></li>
                    <li class="footerItem"><a class="footerLink" href="{{url('/link')}}">Link 2</a></li>
                    <li class="footerItem"><a class="footerLink" href="{{url('/link')}}">Link 3</a></li>
                    <li class="footerItem"><a class="footerLink" href="{{url('/link')}}">Link 4</a></li>
                    <li class="footerItem"><a class="footerLink" href="{{url('/link')}}">Link 5</a></li>
                    <li class="footerItem"><a class="footerLink" href="{{url('/link')}}">Link 6</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <form id="search" action="#" method="POST">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Zoeken voor iets">
                        <div class="input-group-append">
                            <button disabled class="btn btn-primary" type="submit">Zoeken</button>
                        </div>
                    </div>
                </form>
                <div class="social-media d-flex justify-content-around flex-wrap">
                    <a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a>
                    <a href="https://twitter.com"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.instagram.com"><span class="fa fa-instagram"></span></a>
                    <a href="mailto:happyland@gmail.com"><span class="fa fa-envelope"></span></a>
                    <a href="https://www.youtube.com/?gl=NL&hl=nl"><span class="fa fa-youtube"></span></a>
                </div>
                <ul class="phone d-flex justify-content-around flex-wrap">
                    <li>
                        <span class="fa fa-phone"></span>
                        + 31 6 123 45 678
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        happyland@gmail.com
                    </li>
                </ul>
            </div>
            <div class="col-md-3 map">
                <iframe class="mx-auto d-block map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.653681114115!2d16.327268215534342!3d48.30951172923757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0f035c8a624d%3A0x3300bbdf9986a3ed!2sHappyland!5e0!3m2!1snl!2snl!4v1558811216565!5m2!1snl!2snl" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-12 copyright">
                &copy; Mitchell, Robert, Xander, Olaf 2019
            </div>
        </div>
    </div>
</footer>
</body>
</html>