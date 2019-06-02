@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">
            <h2>{{ $store->facilitie->name }}</h2>

            <p class="storeDescription">
                {{ $store->facilitie->description }}
            </p>

                <a href="{{$store->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
                <a href="{{$store->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>
                <a href="#" class="btn btn-dark">Bekijk welke producten deze winkel heeft</a>

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
                <tr>
                    <th>Winkel id</th>
                    <td>{{ $store->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection