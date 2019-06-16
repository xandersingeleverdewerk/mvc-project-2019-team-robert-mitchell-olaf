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

                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/stores/'.$store->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Assortiment van {{ $store->facilitie->name }}</h2>
                </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/stores/'.$store->id.'/storeRules/create') }}">Toevoegen <span class="fa fa-plus"></span></a>
                </li>
            </ul>

            <form class="form" action="{{ url('/park/stores/'.$store->id.'/storeRules')}}" method="POST">
                @csrf
                <h3>Product toevoegen aan {{ $store->facilitie->name }}</h3>
                <div hidden class="form-group">
                    <label for="store_id">Kies een winkel</label>
                    <input id="store_id" name="store_id" class="form-control" type="text" value="{{ $store->id }}" />
                </div>
                <div class="form-group">
                    <label for="product_id">Kies een product</label>
                    <select id="product_id" name="product_id" class="form-control">
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