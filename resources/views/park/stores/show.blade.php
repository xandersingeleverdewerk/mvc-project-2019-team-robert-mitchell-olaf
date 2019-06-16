@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">
            <h2>{{ $store->facilitie->name }}</h2>

            <p class="storeDescription">
                {{ $store->facilitie->description }}
            </p>

            @can('edit stores')
                <a href="{{$store->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
            @endcan
            @can('delete stores')
                <a href="{{$store->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>
            @endcan
            @can('show storeRules')
                <a href="{{$store->id.'/storeRules'}}" class="btn btn-dark">Bekijk assortiment</a>
            @endcan

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Openingstijd</th>
                    <td>{{ $store->facilitie->opening_time }}</td>
                </tr>
                <tr>
                    <th>Sluitingstijd</th>
                    <td>{{ $store->facilitie->closing_time }}</td>
                </tr>
                @can('show storeId')
                <tr>
                    <th>Winkel id</th>
                    <td>{{ $store->id }}</td>
                </tr>
                    @endcan
            </table>
        </div>
    </section>

@endsection