@extends('layout.layout')
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
                <a class="nav-link active" href="{{ url('/attractions/'.$review->id.'/destroy') }}">Delete</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => '/attractions/'.$attraction->id, 'method' => 'DELETE']) !!}

    <div class="form-group">
        {!! Form::label('waitTime', 'WaitTime') !!}
        {!! Form::text('waitTime', $attraction->waitTime, ['class' => 'form-control',
                                                            'id' => 'waitTime',
                                                            'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('minAge', 'MinAge') !!}
        {!! Form::text('minAge', $attraction->minAge, ['class' => 'form-control',
                                                        'id' => 'minAge',
                                                        'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('minLength', 'Minlength') !!}
        {!! Form::text('minLength', $attraction->minLength, ['class' => 'form-control',
                                                              'id' => 'minLength',
                                                              'disabled' => 'disabled']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>

    {!! Form::close() !!}
@endsection
