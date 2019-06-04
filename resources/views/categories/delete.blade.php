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
                <a class="nav-link active" href="{{ route('categories.delete',
                                        ['categorie' => $categorie->id]) }}">Delete Categorie</a>
            </li>
        </ul>
    </nav>

    <form class="form" action="{{route('categories.destroy', $categorie) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $categorie->name;?>"disabled/>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>

@endsection
