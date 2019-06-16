@extends('layout.master')

@section('content')

    <section class="menuSection">
        <div class="container">
            <div class="d-flex flex">
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/restaurants/'.$restaurant->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="parkTitle">Menu van {{ $restaurant->facilitie->name }}</h2>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    @can('create dishes')
                        <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules/create') }}">Toevoegen</a>
                    @endcan
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Gerecht</a>
                </li>
            </ul>

            <h3>{{ $restaurantRule->dish->name }}</h3>

            <p class="dishDescription">
                {{ $restaurantRule->dish->description }}
            </p>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Prijs</th>
                    <td>&euro; {{ $restaurantRule->dish->price}}</td>
                </tr>
                <tr>
                    <th>Gerecht id</th>
                    <td>{{ $restaurantRule->dish->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection