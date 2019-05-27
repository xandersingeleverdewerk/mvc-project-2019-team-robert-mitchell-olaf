@extends('layout.master')

@section('content')

    <h1 class="mt-5">Categories</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"> href="{{ route('categories.show',
                                        ['categorie' => $categorie->id]) }}">Categorie Details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">{{ $categorie->name }}</h2>
        </div>
    </div>

@endsection
