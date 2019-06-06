@extends('layout.master')

@section('content')

    <section class="categorieSection">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2>{{ $categorie->name }} verwijderen</h2>

            <form class="form" action="{{route('categories.destroy', $categorie)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <label for="id"> id</label>
                    <input disabled id="id" name="id" class="form-control" type="text" value="{{ $categorie->id }}" />
                </div>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $categorie->name }}" />
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Categorie</button>
            </form>
        </div>
    </section>

@endsection
