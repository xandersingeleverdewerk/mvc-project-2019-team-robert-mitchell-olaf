@extends('layout.master')

@section('content')

    <section class="attractionSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Attracties</h2>

            <a href="{{ url('/park/attractions/create') }}" class="btn btn-success">Maak een attractie</a>

            <div class="d-flex justify-content-around row">
                @foreach($attractions as $attraction)
                    <a class="block" href="{{ url('park/attractions/'.$attraction->id) }}">
                        <h3 class="blockTitle">{{ $attraction->facilitie->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
