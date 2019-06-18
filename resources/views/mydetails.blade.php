@extends("layout.masterLogin")

@section('content')
    <section class="customerSection">
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

            @can('edit customer')

                <form class="form" action="{{route('.update', $customer)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input id="name" name="name" class="form-control" type="text" value="{{ $store->facilitie->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Beschrijving</label>
                        <textarea id="description" name="description" class="form-control" type="text">{{ $store->facilitie->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="opening_time">Openingstijd</label>
                        <input id="opening_time" name="opening_time" class="form-control" type="time" value="{{ $store->facilitie->opening_time }}" />
                    </div>
                    <div class="form-group">
                        <label for="closing_time">Sluitingstijd</label>
                        <input id="closing_time" name="closing_time" class="form-control" type="time" value="{{ $store->facilitie->closing_time }}" />
                    </div>
                    <button class="btn btn-primary" type="submit">Pas Winkel Aan</button>
                </form>
            @endcan

            @cannot('edit customer')
                <div class="alert alert-danger">
                    <ul>
                        U heeft niet de juiste rechten tot dit deel van de site. Keer a.u.b. terug naar de hoofdpagina.
                    </ul>
                </div>
                <a href="{{ url('/') }}">
                    <button type="button" class="btn btn-primary">Home</button>
                </a>
            @endcannot

        </div>
    </section>
    @endsection