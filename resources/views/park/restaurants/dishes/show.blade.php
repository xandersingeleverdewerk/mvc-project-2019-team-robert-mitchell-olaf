@extends('layout.master')

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
                    <a class="nav-link active" href="{{ url('/park/restaurants/dishes/'.$dish->id) }}">Details</a>
                </li>
            </ul>

            <h3>{{ $dish->name }}</h3>

            <p class="dishDescription">
                {{ $dish->description }}
            </p>

            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/restaurants/dishes/'.$dish->id.'/edit') }}"><span class="fa fa-edit"></span></a>
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/restaurants/dishes/'.$dish->id.'/delete') }}"><span class="fa fa-trash-o"></span></a>

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