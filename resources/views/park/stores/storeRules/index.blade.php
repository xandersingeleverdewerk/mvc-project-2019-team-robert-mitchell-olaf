@extends('layout.master')

@section('content')

    <section class="productsSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

                @can('show storeRules')
                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/stores/'.$store->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Assortiment van {{ $store->facilitie->name }}</h2>
                </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/stores/'.$store->id.'/storeRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    @can('create products')
                    <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules/create') }}">Toevoegen <span class="fa fa-plus"></span></a>
                        @endcan
                </li>
            </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Prijs</th>
                        @can('show products')
                        <th colspan="2">Linkjes</th>
                            @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($storeRules as $storeRule)
                        <tr>
                            <td>{{ $storeRule->product->name }}</td>
                            <td>&euro; {{ $storeRule->product->price }}</td>
                            @can('show products')
                                <td><a class="btn btn-info" href="{{ url('park/stores/'.$storeRule->store_id.'/storeRules/'.$storeRule->id) }}">Bekijk product</a></td>
                            @endcan
                            @can('delete products')
                                <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/stores/'.$storeRule->store_id.'/storeRules/'.$storeRule->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                                @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
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
        </div>
    </section>

@endsection
