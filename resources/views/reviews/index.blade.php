@extends('layout.masterLogin')

@section('content')

    <section class="reviewSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Reviews</h2>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/reviews') }}">Overzicht</a>
                    </li>
                </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Faciliteit naam</th>
                            <th>Naam</th>
                            <th colspan=3>Linkjes</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $review)
                        <tr>
                            <td>{{ $review->facilitie->name }}</td>
                            <td>{{ $review->name }}</td>
                            <td><a class="btn btn-info" href="{{ url('reviews/'.$review->id) }}">Details</a></td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('reviews/'.$review->id.'/edit') }}"><span class="fa fa-edit"></span></a></td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('reviews/'.$review->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
