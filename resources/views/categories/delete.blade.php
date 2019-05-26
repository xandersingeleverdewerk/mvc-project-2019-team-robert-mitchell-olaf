@extends('layout.layout')

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
                <a class="nav-link active" href="{{ route('categories.delete',
                                        ['category' => $category->id]) }}">Delete Category</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => route('categories.destroy' , $category->id), 'method' => 'DELETE']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $category->name, ['class' => 'form-control',
                                                  'id' => 'name',
                                                  'disabled' => 'disabled']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>

    {!! Form::close() !!}
@endsection
