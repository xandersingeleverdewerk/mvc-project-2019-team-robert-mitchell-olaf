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

                <div class="d-flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('park/restaurants/'.$restaurant->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">{{ $restaurant->facilitie->name }} verwijderen</h2>
                </div>

            <form class="form" action="{{route('restaurants.destroy', $restaurant)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <label for="id">Restaurant id</label>
                    <input disabled id="id" name="id" class="form-control" type="text" value="{{ $restaurant->id }}" />
                </div>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $restaurant->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea disabled id="description" name="description" class="form-control" type="text">{{ $restaurant->facilitie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input disabled id="opening_time" name="opening_time" class="form-control" type="time" value="{{ $restaurant->facilitie->opening_time }}" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input disabled id="closing_time" name="closing_time" class="form-control" type="time" value="{{ $restaurant->facilitie->closing_time }}" />
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Restaurant</button>
            </form>
        </div>
    </section>

@endsection