@extends("layout.master")

@section('content')
    <div class="container">
        <h2>Error</h2>

        <div class="alert alert-danger">
            {{ $exception->getMessage() }}
        </div>
        <a href="{{ url('/') }}">
            <button type="button" class="btn btn-primary">Home</button>
        </a>
    </div>
@endsection