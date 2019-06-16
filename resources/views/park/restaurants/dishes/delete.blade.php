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

            <h2>Gerechten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes/create') }}">Maken <span class="fa fa-plus"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/dishes/'.$dish->id) }}">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Verwijderen</a>
                </li>
            </ul>

            <form class="form" action="{{route('dishes.destroy', $dish)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>{{ $dish->name }} verwijderen</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $dish->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea disabled id="description" name="description" class="form-control" type="text">{{ $dish->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prijs</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&euro;</span>
                        </div>
                        <input disabled id="price" name="price" class="form-control" type="number" step=".01" value="{{ $dish->price }}" />
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Gerecht</button>
            </form>
        </div>
    </section>

@endsection