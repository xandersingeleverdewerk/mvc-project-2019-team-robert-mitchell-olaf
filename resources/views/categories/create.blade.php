@extends('layout.master')

@section('content')

    <section class="categoriesSection">
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

            <h2>Categorie aanmaken</h2>

            <form class="form" action="{{route('categories.index')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" placeholder="Categoie naam" />
                </div>
                <button class="btn btn-primary" type="submit">Maak Categorie</button>
            </form>

        </div>
    </section>

@endsection
