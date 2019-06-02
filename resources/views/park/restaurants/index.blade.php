@extends('layout.master')

@section('content')

    @if (session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
    @endif

    <section class="restaurantSection">
        <div class="container">
            <h2>Restaurants</h2>

            <a href="{{ url('/park/restaurants/create') }}" class="btn btn-success">Maak een restaurant</a>

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