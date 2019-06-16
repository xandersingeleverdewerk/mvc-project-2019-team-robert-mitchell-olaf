@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">
            <h2>Producten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    @can('create products')
                    <a class="nav-link" href="{{ url('/park/stores/products/create') }}">Maken</a>
                </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link active">Details</a>
                </li>
            </ul>

            <h3>{{ $product->name }}</h3>

            <p class="productDescription">
                {{ $product->description }}
            </p>

            @can('edit products')
            <a href="{{$product->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
            @endcan
            @can('delete products')
            <a href="{{$product->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>
            @endcan

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Prijs</th>
                    <td>&euro; {{ $product->price}}</td>
                </tr>
                @can('show productId')
                <tr>
                    <th>Product id</th>
                    <td>{{ $product->id }}</td>
                </tr>
                    @endcan
            </table>
        </div>
    </section>

@endsection