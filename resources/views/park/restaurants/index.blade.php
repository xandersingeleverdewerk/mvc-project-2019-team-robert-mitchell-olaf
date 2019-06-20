@extends('layout.master')

@section('content')

    <section class="restaurantSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

                <div class="d-flex flex">
                    @can('create restaurants')
                        <a data-toggle="tooltip" data-placement="right" title="Maak een restaurant" href="{{ url('/park/restaurants/create') }}" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    @endcan
                    <h2 class="parkTitle">Restaurants</h2>
                </div>

            <div class="d-flex justify-content-around row">
                @foreach($restaurants as $restaurant)
                    <a class="block" href="{{ url('park/restaurants/'.$restaurant->id) }}">
                        <h3 class="blockTitle">{{ $restaurant->facilitie->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
