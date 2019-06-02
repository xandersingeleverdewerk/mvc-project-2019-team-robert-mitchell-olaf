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

            <h2>{{ $store->facilitie->name }} verwijderen</h2>

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
        </div>
    </section>

@endsection