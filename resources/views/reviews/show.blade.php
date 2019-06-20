@extends('layout.masterLogin')

@section('content')

    <section class="reviewSection">
        <div class="container">
            <h2>Reviews</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/reviews') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/reviews/'.$review->id) }}">Details</a>
                </li>
            </ul>

            <h3>{{ $review->name }}</h3>

            <p class="reviewDescription">
                {{ $review->review }}
            </p>

            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('reviews/'.$review->id.'/edit') }}"><span class="fa fa-edit"></span></a>
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('reviews/'.$review->id.'/delete') }}"><span class="fa fa-trash-o"></span></a>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Faciliteit</th>
                    <td>{{ $review->facilitie->name }}</td>
                </tr>
                <tr>
                    <th>Gebruiker</th>
                    <td>{{ $review->user->name }}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection