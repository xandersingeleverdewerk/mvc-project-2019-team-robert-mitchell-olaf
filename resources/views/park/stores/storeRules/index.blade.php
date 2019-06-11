@extends('layout.master')

@section('content')

    <section class="productsSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Menu van {{ $store->facilitie->name }}</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/stores/'.$store->id.'/storeRules') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/stores/'.$store->id.'/storeRules/create') }}">Toevoegen</a>
                </li>
            </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Prijs</th>
                        <th colspan="2">Linkjes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($storeRules as $storeRule)
                        <tr>
                            <td>{{ $storeRule->product->name }}</td>
                            <td>&euro; {{ $storeRule->product->price }}</td>
                            <td><a class="btn btn-info" href="{{ url('park/stores/products/'.$storeRule->product->id) }}">Details</a></td>
                            <td><a class="btn btn-danger" href="{{ url('park/stores/'.$storeRule->store_id.'/storeRules/'.$storeRule->id.'/delete') }}">Verwijderen</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
