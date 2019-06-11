@extends('layout.master')

@section('content')

    <section class="productsSection">
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

            <h2>Menu van {{ $store->facilitie->name }}</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/stores/'.$store->id.'/storeRules/create') }}">Toevoegen</a>
                </li>
            </ul>

            <form class="form" action="{{ url('/park/stores/'.$store->id.'/storeRule')}}" method="POST">
                @csrf
                <h3>Product toevoegen aan {{ $store->facilitie->name }}</h3>
                <div hidden class="form-group">
                    <label for="store_id">Kies een winkel</label>
                    <input id="store_id" name="store_id" class="form-control" type="text" value="{{ $store->id }}" />
                </div>
                <div class="form-group">
                    <label for="product_id">Kies een gerecht</label>
                    <select id="product_id" name="dish_id" class="form-control">
                        <option selected disabled>Kies een product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Voeg toe aan assortiment</button>
            </form>
        </div>
    </section>

@endsection