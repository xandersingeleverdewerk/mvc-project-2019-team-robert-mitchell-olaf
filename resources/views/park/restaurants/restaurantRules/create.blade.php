@extends('layout.master')

@section('content')

    <section class="menuSection">
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

            @can('create restaurantRules')

                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/restaurants/'.$restaurant->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Menu van {{ $restaurant->facilitie->name }}</h2>
                </div>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules') }}">Overzicht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules/create') }}">Toevoegen <span class="fa fa-plus"></span></a>
                    </li>
                </ul>

            <form class="form" action="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules')}}" method="POST">
                @csrf
                <h3>Gerecht toevoegen aan {{ $restaurant->facilitie->name }}</h3>
                <div hidden class="form-group">
                    <label for="restaurant_id">Kies een restaurant</label>
                    <input id="restaurant_id" name="restaurant_id" class="form-control" type="text" value="{{ $restaurant->id }}" />
                </div>
                <div class="form-group">
                    <label for="dish_id">Kies een gerecht</label>
                    <select id="dish_id" name="dish_id" class="form-control">
                        <option selected disabled>Kies een gerecht</option>
                        @foreach($dishes as $dish)
                            <option value="{{ $dish->id }}">{{ $dish->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Voeg toe aan menu</button>
            </form>
                @endcan
            @cannot('create restaurantRules')
                @yield('content', View::make('errors.noPermission'))
            @endcannot
        </div>
    </section>

@endsection