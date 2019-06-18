@extends('layout.master')

@section('content')

    @can('show storeRules')
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
                @can('show productId')
                <tr>
                    <th>Product id</th>
                    <td>{{ $storeRule->product->id }}</td>
                </tr>
                    @endcan
            </table>
        </div>
    </section>
    @endcan
    @cannot('show storeRules')
        <div class="alert alert-danger">
            <ul>
                U heeft niet de juiste rechten tot dit deel van de site. Keer a.u.b. terug naar de hoofdpagina.
            </ul>
        </div>
        <a href="{{ url('/') }}">
            <button type="button" class="btn btn-primary">Home</button>
        </a>
    @endcannot

@endsection