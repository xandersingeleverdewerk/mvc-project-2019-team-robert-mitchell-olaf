@extends('layout.masterLogin')

@section('content')

    <section class="restaurantSection">
        <div class="container">
            <h2>Gerechten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes/create') }}">Maken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Details</a>
                </li>
            </ul>

            <h3>{{ $dish->name }}</h3>

            <p class="dishDescription">
                {{ $dish->description }}
            </p>

                <a href="{{$dish->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
                <a href="{{$dish->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Prijs</th>
                    <td>&euro; {{ $dish->price}}</td>
                </tr>
                <tr>
                    <th>Gerecht id</th>
                    <td>{{ $dish->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection