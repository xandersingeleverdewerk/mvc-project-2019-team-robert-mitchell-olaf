@extends('layout.masterLogin')

@section('content')

    <section class="storeSection">
        <div class="container">
            <h2>Producten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products/create') }}">Maken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Details</a>
                </li>
            </ul>

            <h3>{{ $product->name }}</h3>

            <p class="productDescription">
                {{ $product->description }}
            </p>

            <a href="{{$product->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
            <a href="{{$product->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Prijs</th>
                    <td>&euro; {{ $product->price}}</td>
                </tr>
                <tr>
                    <th>Product id</th>
                    <td>{{ $product->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection