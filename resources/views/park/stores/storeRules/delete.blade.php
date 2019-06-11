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
                    <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules/create') }}">Toevoegen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Verwijderen</a>
                </li>
            </ul>

            <form class="form" action="{{ url('/park/stores/'.$store->id.'/storeRules',$storeRule)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>Product verwijderen van {{ $store->facilitie->name }}</h3>
                <div hidden class="form-group">
                    <label for="store_id">Winkel</label>
                    <input disabled id="store_id" name="store_id" class="form-control" type="text" value="{{ $storeRule->store->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="product_id">Product</label>
                    <input disabled id="product_id" name="product_id" class="form-control" type="text" value="{{ $storeRule->product->name }}">
                </div>
                <button class="btn btn-primary" type="submit">Verwijder van assortiment</button>
            </form>
        </div>
    </section>

@endsection

