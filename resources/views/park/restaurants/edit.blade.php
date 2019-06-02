@extends('layout.master')

@section('content')

    <section class="restaurantSection">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2>{{ $restaurant->facilitie->name }} aanpassen</h2>

            <form class="form" action="{{route('restaurants.update', $restaurant)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" value="{{ $restaurant->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea id="description" name="description" class="form-control" type="text">{{ $restaurant->facilitie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input id="opening_time" name="opening_time" class="form-control" type="time" value="{{ $restaurant->facilitie->opening_time }}" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input id="closing_time" name="closing_time" class="form-control" type="time" value="{{ $restaurant->facilitie->closing_time }}" />
                </div>
                <button class="btn btn-primary" type="submit">Pas Restaurant Aan</button>
            </form>

        </div>
    </section>

@endsection