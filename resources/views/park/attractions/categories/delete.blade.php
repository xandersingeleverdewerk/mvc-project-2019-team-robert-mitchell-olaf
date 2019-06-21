@extends('layout.masterLogin')

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

            <h2>Categories</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/attractions/categories') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/attractions/categories/create') }}">Maken <span class="fa fa-plus"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Verwijderen <span class="fa fa-trash-o"></span></a>
                </li>
            </ul>

            <form class="form" action="{{route('categories.destroy', $categorie)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>{{ $categorie->name }} verwijderen</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $categorie->name }}" />
                </div>
                <button class="btn btn-primary" type="submit">Verwijder categorie</button>
            </form>
        </div>
    </section>

@endsection
