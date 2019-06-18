@extends('layout.master')

@section('content')

    <section class="menuSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/restaurants/'.$restaurant->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Menu van {{ $restaurant->facilitie->name }}</h2>
                </div>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules') }}">Overzicht</a>
                    </li>
                    <li class="nav-item">
                        @can('create dishes')
                        <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules/create') }}">Toevoegen <span class="fa fa-plus"></span></a>
                        @endcan
                    </li>
                </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Gerecht</th>
                            <th>Prijs</th>
                            @can('show dishes')
                            <th colspan="2">Linkjes</th>
                                @endcan
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($restaurantRules as $restaurantRule)
                        <tr>
                            <td>{{ $restaurantRule->dish->name }}</td>
                            <td>&euro; {{ $restaurantRule->dish->price }}</td>
                            @can('show dishes')
                            <td><a class="btn btn-info" href="{{ url('park/restaurants/'.$restaurantRule->restaurant_id.'/restaurantRules/'.$restaurantRule->id) }}">Bekijk gerecht</a></td>
                            @endcan
                            @can('delete dishes')
                            <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/restaurants/'.$restaurantRule->restaurant_id.'/restaurantRules/'.$restaurantRule->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
