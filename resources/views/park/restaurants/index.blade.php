@extends('layout.master')

@section('content')

    <section class="restaurantSection">
        <div class="container">
            <h2>Restaurants</h2>

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