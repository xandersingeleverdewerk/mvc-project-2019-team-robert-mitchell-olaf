@extends('layout.master')

@section('content')

    <h1 class="mt-5">Categories</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table .table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $categorie)
            <tr>
                <td scope="row">{{ $categorie->id }}</td>
                <td>{{ $categorie->name }}</td>
                <td><a href="{{ url('categories/'.$categorie->id).'/edit' }}">Edit</a></td>
                <td><a href="{{ url('categories/'.$categorie->id).'/delete' }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
