@extends('layout.masterLogin')

@section('content')

    <section class="restaurantSection">
        <div class="container">
            @can('show dishes')

            <h2>Gerechten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes') }}">Overzicht</a>
                </li>
                @can('create dishes')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes/create') }}">Maken <span class="fa fa-plus"></span></a>
                </li>
                @endcan
                @can('show dishes')
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/restaurants/dishes/'.$dish->id) }}">Details</a>
                </li>
                @endcan
            </ul>

            <h3>{{ $dish->name }}</h3>

            <p class="dishDescription">
                {{ $dish->description }}
            </p>

            @can('edit dishes')
            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/restaurants/dishes/'.$dish->id.'/edit') }}"><span class="fa fa-edit"></span></a>
            @endcan
            @can('delete dishes')
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/restaurants/dishes/'.$dish->id.'/delete') }}"><span class="fa fa-trash-o"></span></a>
            @endcan

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Prijs</th>
                    <td>&euro; {{ $dish->price}}</td>
                </tr>
                @can('show dishId')
                <tr>
                    <th>Gerecht id</th>
                    <td>{{ $dish->id }}</td>
                </tr>
                @endcan
            </table>
            @endcan
            @cannot('show dishes')
                @yield('content', View::make('errors.noPermission'))
            @endcannot
        </div>
    </section>

@endsection