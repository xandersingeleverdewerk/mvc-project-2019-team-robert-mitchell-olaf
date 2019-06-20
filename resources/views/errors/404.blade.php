@extends("layout.master")

@section('content')
    <div class="errorSection">
        <div class="container">
            <h2>Error</h2>

            <div class="alert alert-danger">
                Deze pagina bestaat niet. Klik op de knop om terug te gaan naar de Home pagina
            </div>
            <a href="{{ url('/') }}">
                <button type="button" class="btn btn-primary">Home</button>
            </a>
        </div>
    </div>
@endsection