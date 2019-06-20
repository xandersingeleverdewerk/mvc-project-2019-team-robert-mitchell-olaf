@extends('layout.masterLogin')

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
                    @can('create dishes')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/park/restaurants/dishes/create') }}">Maken <span class="fa fa-plus"></span></a>
                    </li>
                    @endcan
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
                            @can('show dishes')
                            <td><a class="btn btn-info" href="{{ url('park/restaurants/dishes/'.$dish->id) }}">Details</a></td>
                            @endcan
                            @can('edit dishes')
                            <td><a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/restaurants/dishes/'.$dish->id.'/edit') }}"><span class="fa fa-edit"></span></a></td>
                            @endcan
                            @can('delete dishes')
                            <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/restaurants/dishes/'.$dish->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
