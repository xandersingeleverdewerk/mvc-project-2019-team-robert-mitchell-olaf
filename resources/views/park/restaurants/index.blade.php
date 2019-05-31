@extends('layout.master')

@section('content')

    <section class="restaurantSection">
        <div class="container">
            <h2>Restaurants</h2>

            <div class="row">
            @foreach($restaurants as $restaurant)
                <div class="block col-sm-3">
                    <h3 class="blockTitle">{{$restaurant->facilitie->name}}</h3>
                </div>
            @endforeach
            </div>
        </div>
    </section>

@endsection