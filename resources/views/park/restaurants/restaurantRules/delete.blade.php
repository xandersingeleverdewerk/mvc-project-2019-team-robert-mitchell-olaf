@extends('layout.master')

@section('content')

    <section class="menuSection">
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

            <h2>Menu van {{ $restaurant->facilitie->name }}</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules/create') }}">Toevoegen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Verwijderen</a>
                </li>
            </ul>

            <form class="form" action="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules',$restaurantRule)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>Gerecht verwijderen van {{ $restaurant->facilitie->name }}</h3>
                <div hidden class="form-group">
                    <label for="restaurant_id">Restaurant</label>
                    <input disabled id="restaurant_id" name="restaurant_id" class="form-control" type="text" value="{{ $restaurantRule->restaurant->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="dish_id">Gerecht</label>
                    <input disabled id="dish_id" name="dish_id" class="form-control" type="text" value="{{ $restaurantRule->dish->name }}">
                </div>
                <button class="btn btn-primary" type="submit">Verwijder van menu</button>
            </form>
        </div>
    </section>

@endsection

