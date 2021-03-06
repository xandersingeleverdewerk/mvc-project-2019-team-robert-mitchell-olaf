@extends('layout.masterLogin')

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
@can('edit products')
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
                        <a class="nav-link active">Aanpassen <span class="fa fa-edit"></span></a>
                    </li>
                </ul>

                <form class="form" action="{{route('products.update', $product)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <h3>{{ $product->name }} aanpassen</h3>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input id="name" name="name" class="form-control" type="text" value="{{ $product->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Beschrijving</label>
                        <textarea id="description" name="description" class="form-control" type="text">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Prijs</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&euro;</span>
                            </div>
                            <input id="price" name="price" class="form-control" type="number" step=".01" value="{{ $product->price }}" />
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Pas Product Aan</button>
                </form>
                @endcan
            @cannot('edit products')
                    <div class="alert alert-danger">
                        <ul>
                            U heeft niet de juiste rechten tot dit deel van de site. Keer a.u.b. terug naar de hoofdpagina.
                        </ul>
                    </div>
                    <a href="{{ url('/') }}">
                        <button type="button" class="btn btn-primary">Home</button>
                    </a>
                @endcannot
        </div>
    </section>

@endsection