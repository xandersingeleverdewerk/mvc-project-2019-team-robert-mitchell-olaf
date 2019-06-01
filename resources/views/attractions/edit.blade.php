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
                <a class="nav-link" href="{{ url('/attractions/create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/attractions/'.$attraction->id.'/edit') }}">Edit</a>
            </li>
        </ul>
    </nav>

    <form class="form" action="{{route('attractions.update', $attraction) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="WaitTime">waitTime</label>
            <input type="time" name="waitTime" class="form-control" placeholder="Enter Time" value="<?php echo $attraction->waitTime;?>"/>
        </div>
        <div class="form-group">
            <label for="minAge">minAge</label>
            <input type="number" name="minAge" class="form-control" placeholder="Enter age" value="<?php echo $attraction->minAge;?>"/>
        </div>
        <div class="form-group">
            <label for="minlength">minlength</label>
            <input type="number" step="any" name="minLength" class="form-control" placeholder="Enter length" value="<?php echo $attraction->minLength;?>"/>
        </div>
        <div class="form-group">
            <label for="categorie_id">categorie_id</label>
            <input type="number" step="any" name="categorie_id" class="form-control" placeholder="Enter id" value="<?php echo $attraction->categorie_id;?>"/>
        </div>
        <div class="form-group">
            <label for="facilitie_id">facilitie_id</label>
            <input type="number" step="any" name="facilitie_id" class="form-control" placeholder="Enter id" value="<?php echo $attraction->facilitie_id;?>"/>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
@endsection

