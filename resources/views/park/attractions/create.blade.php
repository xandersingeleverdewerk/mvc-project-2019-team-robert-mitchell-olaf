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

            <h2>Attraction aanmaken</h2>

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
                <div class="form-group">
                    <label for="categorie_id">Id van categorie</label>
                    <input id="categorie_id" name="categorie_id" class="form-control" type="text" placeholder="Id van categorie" />
                </div>
                <div class="form-group">
                    <label for="facilitie_id">Id van faciliteit</label>
                    <input id="facilitie_id_id" name="facilitie_id" class="form-control" type="text" placeholder="Id van facilitie" />
                </div>
                <button class="btn btn-primary" type="submit">Maak Attractie</button>
            </form>

        </div>
    </section>

@endsection
