@extends('layout.master')

@section('content')

    <section class="dishesSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Gerechten</h2>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/park/restaurants/dishes') }}">Overzicht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/park/restaurants/dishes/create') }}">Maken</a>
                    </li>
                </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Prijs</th>
                            <th colspan=3>Linkjes</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dishes as $dish)
                        <tr>
                            <td>{{ $dish->name }}</td>
                            <td> &euro; {{ $dish->price }}</td>
                            <td><a class="btn btn-info" href="{{ url('park/restaurants/dishes/'.$dish->id) }}">Details</a></td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/restaurants/dishes/'.$dish->id.'/edit') }}"><span class="fa fa-edit"></span></a></td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/restaurants/dishes/'.$dish->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
