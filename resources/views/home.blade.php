@extends('layout.master')

@section('content')

    <div class="container">

    <div id="idCarousel" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="slide0" data-slide-to="0" class="active"></li>
            <li data-target="slide1" data-slide-to="1"></li>
            <li data-target="slide2" data-slide-to="2"></li>
            <li data-target="slide3" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/happyland.jpg')}}" alt="happyland" width="900" height="300">
                <div class="carousel-caption">
                    <h3>Het park</h3>
                    <p>Stap in een fantasierijke wereld!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/rollercoaster2.jpg')}}" alt="RollercoasterSlider" width="900" height="300">
                <div class="carousel-caption">
                    <h3>Achtbanen</h3>
                    <p>Geniet van de coolste achtbanen!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/carousel.jpg')}}" alt="carousel" width="900" height="300">
                <div class="carousel-caption">
                    <h3>Carousel</h3>
                    <p>Kom tot rust in de carousel</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/ferris_wheel.jpg')}}" alt="ferris_wheel" width="900" height="300">
                <div class="carousel-caption">
                    <h3>Beter overzicht?</h3>
                    <p>Stap in het reuzenrad voor een mooi uitzicht</p>
                </div>
            </div>
        </div>

    </div>
    </div>

    <section class="information">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img alt="rollercoaster" class="informationImg img-fluid rounded" src="{{asset('images/rollercoaster.jpg')}}">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">        <h2>Informatie</h2>
        <p>
            Binnenkort wordt er nieuw pretpark gebouwd met de originele naam Pretpark HappyLand.
            In dit pretpark draait alles om lol maken en heel veel lachen.
        </p>
            <a href="#moreInfo" class="btn btn-primary" data-toggle="collapse">Lees meer</a>
        <div id="moreInfo" class="collapse">
            <p>
            Stap bijvoorbeeld in de coolste achtbanen of geniet van een rustig ritje in een familieattractie.
            Ook kun je tijdens het warme weer afkoelen in één van onze waterattracties. Is dit niet genoeg afkoeling?
                Dan kun je altijd bij één van onze ijskraampjes een lekker koud ijsje halen.
                In het park vind je ook allerlei restaurants waar je lekker kan eten met je vrienden en familie.
                Wanneer je het park verlaat wil je natuurlijk wel een leuk aandenken voor thuis hebben. Ook hiervoor hebben wij wat jij zoekt.
                Namelijk verschillende winkels verspreid over het park.
            </p>
        </div>
                </div>
            </div>
        </div>
    </section>
@endsection