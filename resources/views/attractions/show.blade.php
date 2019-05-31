@extends('layout.master')

@section('content')
    <h1>Attractions</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/attractions') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/attractions/create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/attractions/'.$review->id)}}">Show</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Attraction Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $attraction->waitTime }}</h2>
            <p class="card-text">{{ $attraction->minAge }}</p>
            <p class="card-text">{{ $attraction->minLength }}</p>
            <p class="card-text">{{ $attraction->categorie_id }}</p>
            <p class="card-text">{{ $attraction->facility_id }}</p>
        </div>
    </div>
@endsection
