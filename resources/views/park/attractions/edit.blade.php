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
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('park/attractions/'.$attraction->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">{{ $attraction->facilitie->name }} aanpassen</h2>
                </div>

                <form class="form" action="{{route('attractions.update', $attraction)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" value="{{ $attraction->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea id="description" name="description" class="form-control" type="text">{{ $attraction->facilitie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input id="opening_time" name="opening_time" class="form-control" type="time" value="{{ $attraction->facilitie->opening_time }}" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input id="closing_time" name="closing_time" class="form-control" type="time" value="{{ $attraction->facilitie->closing_time }}" />
                </div>
                <div class="form-group">
                    <label for="waitTime">Wachttijd</label>
                    <input id="waitTime" name="waitTime" class="form-control" type="time" value="{{ $attraction->waitTime }}" />
                </div>
                <div class="form-group">
                    <label for="minAge">Minimale leeftijd</label>
                    <input id="minAge" name="minAge" class="form-control" type="number" value="{{ $attraction->minAge }}" />
                </div>
                <div class="form-group">
                    <label for="minLength">Minimale grootte</label>
                    <input id="minLength" name="minLength" class="form-control" type="number" step="any" value="{{ $attraction->minLength }}" />
                </div>
                <button class="btn btn-primary" type="submit">Pas Attractie Aan</button>
            </form>
        </div>
    </section>

@endsection
