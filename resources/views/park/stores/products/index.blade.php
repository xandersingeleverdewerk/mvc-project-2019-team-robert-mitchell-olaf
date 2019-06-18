@extends('layout.masterLogin')

@section('content')

    <section class="productsSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Producten</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/stores/products') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    @can('create products')
                    <a class="nav-link" href="{{ url('/park/stores/products/create') }}">Maken <span class="fa fa-plus"></span></a>
                    @endcan
                </li>
            </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th colspan=3>Linkjes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td> &euro; {{ $product->price }}</td>
                            <td><a class="btn btn-info" href="{{ url('park/stores/products/'.$product->id) }}">Details</a></td>
                            @can('edit products')
                            <td><a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/stores/products/'.$product->id.'/edit') }}"><span class="fa fa-edit"></span></a></td>
                            @endcan
                            @can('delete products')
                            <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/stores/products/'.$product->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
