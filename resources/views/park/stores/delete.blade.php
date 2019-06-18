@extends('layout.master')

@section('content')

    <section class="storeSection">
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

                @can('delete stores')
                <div class="d-flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('park/stores/'.$store->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">{{ $store->facilitie->name }} verwijderen</h2>
                </div>

            <form class="form" action="{{route('stores.destroy', $store)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <label for="id">Winkel id</label>
                    <input disabled id="id" name="id" class="form-control" type="text" value="{{ $store->id }}" />
                </div>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $store->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea disabled id="description" name="description" class="form-control" type="text">{{ $store->facilitie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input disabled id="opening_time" name="opening_time" class="form-control" type="time" value="{{ $store->facilitie->opening_time }}" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input disabled id="closing_time" name="closing_time" class="form-control" type="time" value="{{ $store->facilitie->closing_time }}" />
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Winkel</button>
            </form>
                    @endcan

                @cannot('delete stores')
                    <div class="alert alert-danger">
                        <ul>
                            U heeft niet de juiste rechten tot dit deel van de site. Keer a.u.b. terug naar de hoofdpagina.
                        </ul>
                    </div>
                    <a href="{{ url('/') }}">
                        <button type="button" class="btn btn-primary">Home</button>
                    </a>
                @endcannot
        </div>
    </section>

@endsection