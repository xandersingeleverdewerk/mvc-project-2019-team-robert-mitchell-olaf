@extends('layout.master')

@section('content')

    <section class="restaurantSection">
        <div class="container">
            <div class="d-flex flex">
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/park/restaurants') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="parkTitle">{{ $restaurant->facilitie->name }}</h2>
            </div>

            <p class="restaurantDescription">
                {{ $restaurant->facilitie->description }}
            </p>

            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" href="{{$restaurant->id.'/edit'}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" href="{{$restaurant->id.'/delete'}}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                <a href="{{$restaurant->id.'/restaurantRules'}}" class="btn btn-dark">Bekijk het menu</a>

            <h3>Aanvullende gegevens</h3>
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