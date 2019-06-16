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
                <button class="btn btn-primary" type="submit">Verwijder uit assortiment</button>
            </form>
        </div>
    </section>

@endsection

