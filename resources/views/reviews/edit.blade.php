@extends('layout.masterLogin')

@section('content')

    <section class="restaurantSection">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2>Reviews</h2>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/reviews') }}">Overzicht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/reviews/'.$review->id) }}">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Aanpassen <span class="fa fa-edit"></span></a>
                    </li>
                </ul>

            <form class="form" action="{{route('reviews.update', $review)}}" method="POST">
                @csrf
                @method('PATCH')
                <h3>{{ $review->name }} aanpassen</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" value="{{ $review->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Review</label>
                    <textarea id="review" name="review" class="form-control" type="text">{{ $review->review }}</textarea>
                </div>
                <div class="form-group">
                    <label for="user_id">Gebruiker</label>
                    <input disabled id="user_id" name="user_id" class="form-control" type="text" value="{{ $review->user->name }}" />
                </div>
                <div class="form-group">
                    <label for="_id">Faciliteit</label>
                    <input disabled id="user_id" name="user_id" class="form-control" type="text" value="{{ $review->facilitie->name }}" />
                </div>
                <button class="btn btn-primary" type="submit">Pas Review Aan</button>
            </form>
        </div>
    </section>

@endsection