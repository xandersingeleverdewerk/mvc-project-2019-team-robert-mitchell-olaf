@extends('layout.masterLogin')

@section('content')

    <section class="reviewSection">
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
                    <a class="nav-link active">Verwijderen <span class="fa fa-trash-o"></span></a>
                </li>
            </ul>

            <form class="form" action="{{route('reviews.destroy', $review)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>{{ $review->name }} verwijderen</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $review->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Review</label>
                    <textarea disabled id="review" name="review" class="form-control" type="text">{{ $review->review }}</textarea>
                </div>
                <div class="form-group">
                    <label for="user_id">Gebruiker</label>
                    <input disabled id="user_id" name="user_id" class="form-control" type="text" value="{{ $review->user->name }}" />
                </div>
                <div class="form-group">
                    <label for="_id">Faciliteit</label>
                    <input disabled id="user_id" name="user_id" class="form-control" type="text" value="{{ $review->facilitie->name }}" />
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Review</button>
            </form>
        </div>
    </section>

@endsection