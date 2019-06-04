@extends('layout.master')

@section('content')

    <section class="attractionSection">
        <div class="container">
            <h2>{{ $attraction->facilitie->name }}</h2>

            <p class="attractionDescription">
                {{ $attraction->facilitie->description }}
            </p>

            <a href="{{$attraction->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
            <a href="{{$attraction->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>
            <a href="#" class="btn btn-dark">Bekijk van welk categorie dit attractie is</a>

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
                    <th>minimale grootte</th>
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
