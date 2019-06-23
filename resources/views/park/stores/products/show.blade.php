@extends('layout.masterLogin')

@section('content')

    <section class="storeSection">
        <div class="container">
            <h2>Producten</h2>
@can('show products')
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/products') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    @can('create products')
                    <a class="nav-link" href="{{ url('/park/stores/products/create') }}">Maken <span class="fa fa-plus"></span></a>
                @endcan
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/stores/products/'.$product->id) }}">Details</a>
                </li>
            </ul>

            <h3>{{ $product->name }}</h3>

            <p class="productDescription">
                {{ $product->description }}
            </p>



            @can('edit products')
            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/stores/products/'.$product->id.'/edit') }}"><span class="fa fa-edit"></span></a>
            @endcan

            @can('delete products')
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/stores/products/'.$product->id.'/delete') }}"><span class="fa fa-trash-o"></span></a>
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
    @endcan
            @cannot('show products')
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