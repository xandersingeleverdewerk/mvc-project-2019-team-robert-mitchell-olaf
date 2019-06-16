@extends('layout.master')

@section('content')

    <section class="productsSection">
        <div class="container">
            <div class="d-flex flex">
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/stores/'.$store->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="parkTitle">Assortiment van {{ $store->facilitie->name }}</h2>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    @can('create stores')
                        <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules/create') }}">Toevoegen <span class="fa fa-plus"></span></a>
                    @endcan
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Product</a>
                </li>
            </ul>

            <h3>{{ $storeRule->product->name }}</h3>

            <p class="storeDescription">
                {{ $storeRule->product->description }}
            </p>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Prijs</th>
                    <td>&euro; {{ $storeRule->product->price}}</td>
                </tr>
                <tr>
                    <th>Product id</th>
                    <td>{{ $storeRule->product->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection