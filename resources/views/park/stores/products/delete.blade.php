@extends('layout.master')

@section('content')

    <section class="storeSection">
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

            <h2>Producten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products/create') }}">Maken <span class="fa fa-plus"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products/'.$product->id) }}">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Verwijderen</a>
                </li>
            </ul>

            <form class="form" action="{{route('products.destroy', $product)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>{{ $product->name }} verwijderen</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $product->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea disabled id="description" name="description" class="form-control" type="text">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prijs</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&euro;</span>
                        </div>
                        <input disabled id="price" name="price" class="form-control" type="number" step=".01" value="{{ $product->price }}" />
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Product</button>
            </form>
        </div>
    </section>

@endsection