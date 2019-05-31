@extends('layout.master')

@section('content')
    <h1 class="mt-5">Attractions</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/attractions') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/attractions/create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <form action="{{action('AttractionsController@store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="WaitTime">waitTime</label>
            <input type="time" name="waitTime" class="form-control" placeholder="Enter Time"/>
        </div>
        <div class="form-group">
            <label for="minAge">minAge</label>
            <input type="number" name="minAge" class="form-control" placeholder="Enter age"/>
        </div>
        <div class="form-group">
            <label for="minlength">minlength</label>
            <input type="number" step="any" name="minLength" class="form-control" placeholder="Enter length"/>
        </div>
        <div class="form-group">
            <label for="category_id">categorie_id</label>
            <input type="number" step="any" name="categorie_id" class="form-control" placeholder="Enter id"/>
        </div>
        <div class="form-group">
            <label for="facility_id">facility_id</label>
            <input type="number" step="any" name="facility_id" class="form-control" placeholder="Enter id"/>
        </div>
        <input   type="submit" value="Submit" class="btn btn-primary">
    </form>
@endsection
