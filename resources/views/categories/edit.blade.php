@extends('layout.master')

@section('content')

    <h1 class="mt-5">Categories</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('categories.edit',
                                        ['categorie' => $categorie->id]) }}">Edit Categorie</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => route('categories.update' , $categorie->id), 'method' => 'PATCH']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $categorie->name, ['class' => 'form-control', 'id' => 'name']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Wijzig</button>

    {!! Form::close() !!}
@endsection
