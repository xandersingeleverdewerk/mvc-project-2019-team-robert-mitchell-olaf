@extends('layout.master')

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

    <table class="table .table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Wait time</th>
            <th scope="col">Minimal age</th>
            <th scope="col">Minimal length</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attractions as $attraction)
            <tr>
                <td scope="row">{{ $attraction->id }}</td>
                <td>{{ $attraction->waitTime }}</td>
                <td>{{ $attraction->minAge }}</td>
                <td>{{ $attraction->minLength }}</td>
                <td><a href="{{ url('/attractions/'.$attraction->id.'/edit') }}">Edit</a></td>
                <td><a href="{{ url('/attractions/'.$attraction->id.'/delete') }}">Delete</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
