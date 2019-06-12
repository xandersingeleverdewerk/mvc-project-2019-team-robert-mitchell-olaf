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
                <form class="form-inline" action="/reservations.php">
                    <label for="ticket" class="mr-sm-2">Ticket</label>
                    <input name="ticket" id="ticekt" type="text" class="form-control mb-2 mr-sm-2">
                    <label for="quantity" class="mr-sm-2">Aantal</label>
                    <input name="quantity" id="quantity" type="number" class="form-control mb-2 mr-sm-2">
                    <button type="submit" class="btn btn-primary mb-2">Reserveren</button>
                </form>
            </div>
        </div>
    </div>

    <div class="blockSection">
        <div class="container">
            <div class="d-flex justify-content-around row">
                <a class="blockLink" href="#">
                    <h3 class="blockTitle">Dit is een linkje</h3>
                </a>
                <a class="blockLink" href="#">
                    <h3 class="blockTitle">Dit is een linkje</h3>
                </a>
                <a class="blockLink" href="#">
                    <h3 class="blockTitle">Dit is een linkje</h3>
                </a>
                <a class="blockLink" href="#">
                    <h3 class="blockTitle">Dit is een linkje</h3>
                </a>
            </div>
        </div>
    </div>
@endsection