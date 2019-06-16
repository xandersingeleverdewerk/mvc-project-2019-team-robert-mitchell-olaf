@extends("layout.master")

@section('content')
    <div class="container">
        <h2>Error</h2>

        <div class="alert alert-danger">
            {{ $exception->getMessage() }}
        </div>
    </div>
@endsection