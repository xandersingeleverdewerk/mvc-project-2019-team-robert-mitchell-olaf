@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Winkels</h2>

                @can('create store')
            <a href="{{ url('/park/stores/create') }}" class="btn btn-success">Maak een winkel</a>
                @endcan

            <div class="d-flex justify-content-around row">
            @foreach($stores as $store)
                <a class="block" href="{{ url('park/stores/'.$store->id) }}">
                    <h3 class="blockTitle">{{ $store->facilitie->name }}</h3>
                </a>
            @endforeach
            </div>
        </div>
    </section>

@endsection