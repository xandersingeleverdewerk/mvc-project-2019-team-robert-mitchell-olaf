@extends("layout.master")

@section('content')
    <div class="errorSection">
        <div class="container">
            <h2>Error</h2>

            <div class="alert alert-danger">
                {{ $exception->getMessage() }}
            </div>
        </div>
    </div>
@endsection