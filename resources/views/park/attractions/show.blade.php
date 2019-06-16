@extends('layout.master')

@section('content')

    <section class="attractionSection">
        <div class="container">
            <div class="d-flex flex">
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/park/attractions') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="parkTitle">{{ $attraction->facilitie->name }}</h2>
            </div>

            <p class="attractionDescription">
                {{ $attraction->facilitie->description }}
            </p>

            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" href="{{$attraction->id.'/edit'}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" href="{{$attraction->id.'/delete'}}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Openingstijd</th>
                    <td>{{ $attraction->facilitie->opening_time }}</td>
                </tr>
                <tr>
                    <th>Sluitingstijd</th>
                    <td>{{ $attraction->facilitie->closing_time }}</td>
                </tr>
                <tr>
                    <th>Wachttijd</th>
                    <td>{{ $attraction->waitTime }}</td>
                </tr>
                <tr>
                    <th>Minimale leeftijd</th>
                    <td>{{ $attraction->minAge }}</td>
                </tr>
                <tr>
                    <th>Minimale lengte</th>
                    <td>{{ $attraction->minLength }}</td>
                </tr>
                <tr>
                    <th>Attractie id</th>
                    <td>{{ $attraction->id }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection
