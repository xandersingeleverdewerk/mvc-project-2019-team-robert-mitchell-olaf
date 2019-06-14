@extends('layout.master')

@section('content')

    <section class="attractionSection">
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

            <h2>Attractie aammaken</h2>

                <a href="{{ url('/park/attractions') }}" class="btn btn-info">Terug naar overzicht</a>

            <form class="form" action="{{route('attractions.index')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" placeholder="Attractie naam" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea id="description" name="description" class="form-control" type="text" placeholder="Beschrijving attractie"></textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input id="opening_time" name="opening_time" class="form-control" type="time" placeholder="Openingstijd" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input id="closing_time" name="closing_time" class="form-control" type="time" placeholder="Sluitingstijd" />
                </div>
                <div class="form-group">
                    <label for="waitTime">wachttijd</label>
                    <input id="waitTime" name="waitTime" class="form-control" type="time" placeholder="Wachtijd" />
                </div>
                <div class="form-group">
                    <label for="minAge">Minimale leeftijd</label>
                    <input id="minAge" name="minAge" class="form-control" type="number" placeholder="Minimale leeftijd" />
                </div>
                <div class="form-group">
                    <label for="minLength">Minimale grootte</label>
                    <input id="minLength" name="minLength" class="form-control" type="number" step="any" placeholder="Minimale grootte" />
                </div>
                <button class="btn btn-primary" type="submit">Maak Attractie</button>
            </form>

        </div>
    </section>

@endsection
