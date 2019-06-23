@extends("layout.masterLogin")

@php
    $currentHour = date('G') + 2;

    if($currentHour>=18)
    {$welcomeMessage = 'Goedenavond';}
    else if($currentHour>=12)
    {$welcomeMessage = 'Goedemiddag';}
    else if($currentHour>=6)
    {$welcomeMessage = 'Goedemorgen';}
    else
    {$welcomeMessage= 'Goedennacht';}
@endphp

@section('content')
    <div class="welcomesSection">
        <div class="container">
            <div class="jumbotron">
                <h2 class="Title">{{ $welcomeMessage }} {{ Auth::user()->name }}</h2>
                @can('home customer')
                    <form class="form-inline" action="/reservations.php">
                        <label for="ticket" class="mr-sm-2">Ticket</label>
                        <input name="ticket" id="ticekt" type="text" class="form-control mb-2 mr-sm-2">
                        <label for="quantity" class="mr-sm-2">Aantal</label>
                        <input name="quantity" id="quantity" type="number" class="form-control mb-2 mr-sm-2">
                        <button type="submit" class="btn btn-primary mb-2">Reserveren</button>
                    </form>
                @endcan
            </div>
        </div>
    </div>

    <div class="blockSection">
        <div class="container">
            <div class="d-flex justify-content-around row">
                <a class="blockLink" href="{{ url('/park/restaurants/dishes') }}">
                    <h3 class="blockTitle">Gerechten</h3>
                </a>
                <a class="blockLink" href="{{ url('/park/stores/products') }}">
                    <h3 class="blockTitle">Producten</h3>
                </a>
                @can('home admin')
                    <a class="blockLink" href={{ url('/park/attractions/categories') }}>
                        <h3 class="blockTitle">Attractie Categorieën</h3>
                    </a>
                    <a class="blockLink" href="#">
                        <h3 class="blockTitle">Reserveringen</h3>
                    </a>
                    <a class="blockLink" href="#">
                        <h3 class="blockTitle">Gebruikers</h3>
                    </a>
                @endcan
                @can('home customer')
                    <a class="blockLink" href="#">
                        <h3 class="blockTitle">Mijn bestellingen</h3>
                    </a>
                @endcan
                <a class="blockLink" href="{{ url('/park/restaurants/') }}">
                    <h3 class="blockTitle">Restaurants</h3>
                </a>
                <a class="blockLink" href="{{ url('/park/stores/') }}">
                    <h3 class="blockTitle">Winkels</h3>
                </a>
                <a class="blockLink" href="{{ url('/park/attractions/') }}">
                    <h3 class="blockTitle">Attracties</h3>
                </a>

            </div>
        </div>
    </div>
@endsection