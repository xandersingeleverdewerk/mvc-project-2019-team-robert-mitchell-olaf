@extends('layout.master')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/block.css') }}" />

@section('content')
    <h1 class="mt-5">Attractions</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/attractions') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/attractions/create') }}">Create</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container">
        @foreach($attractions as $attraction)
            <div class="block">
                <h2 id = "facilitieName" scope="row"> {{$attraction->facilitie->name }}</h2>
                <p>Description = {{ $attraction->facilitie->description }}</p>
                <p>Wait time = {{ $attraction->waitTime }}</p>
                <p>Minimal age = {{ $attraction->minAge }}</p>
                <p>Min length = {{ $attraction->minLength }}</p>
                <a href="{{ url('/attractions/'.$attraction->id.'/edit') }}">Edit</a><br>
                <a href="{{ url('/attractions/'.$attraction->id.'/delete') }}">Delete</a>
            </div>
        @endforeach
    </div>

@endsection
