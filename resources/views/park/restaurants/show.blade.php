@extends('layout.master')

@section('content')

    <section class="restaurantSection">
        <div class="container">
            <h2>{{ $restaurant->facilitie->name }}</h2>

            <p class="restaurantDescription">
                {{ $restaurant->facilitie->description }}
            </p>

                <a href="{{$restaurant->id.'/edit'}}" class="btn btn-success">Aanpassen</a>
                <a href="{{$restaurant->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>
                <a href="#" class="btn btn-dark">Bekijk welke gerechten dit restaurant heeft</a>

            <h3>Extra gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Openingstijd</th>
                    <td>{{ $restaurant->facilitie->opening_time }}</td>
                </tr>
                <tr>
                    <th>Sluitingstijd</th>
                    <td>{{ $restaurant->facilitie->closing_time }}</td>
                </tr>
                <tr>
                    <th>Restaurant id</th>
                    <td>{{ $restaurant->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection