@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Restaurants</h2>

            <a href="{{ url('/park/stores/create') }}" class="btn btn-success">Maak een winkel</a>

            <div class="d-flex justify-content-around row">
            @foreach($stores as $store)
                <a class="block" href="{{ url('park/restaurants/'.$store->id) }}">
                    <h3 class="blockTitle">{{ $store->facilitie->name }}</h3>
                </a>
            @endforeach
            </div>
        </div>
    </section>

@endsection