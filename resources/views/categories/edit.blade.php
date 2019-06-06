@extends('layout.master')

@section('content')

    <section class="attractionSection">
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

            <h2>{{ $categorie->name }} aanpassen</h2>

            <form class="form" action="{{route('categories.update', $categorie)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" value="{{ $categorie->name }}" />
                </div>
                <button class="btn btn-primary" type="submit">Pas Categorie Aan</button>
            </form>

        </div>
    </section>

@endsection
