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

            @can('delete restaurantRules')

                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('/park/restaurants/'.$restaurant->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Menu van {{ $restaurant->facilitie->name }}</h2>
                </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules') }}">Overzicht</a>
                </li>
                @can('create restaurantRules')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules/create') }}">Toevoegen <span class="fa fa-plus"></span></a>
                </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link active">Verwijderen <span class="fa fa-trash-o"></span></a>
                </li>
            </ul>

            <form class="form" action="{{ url('/park/restaurants/'.$restaurant->id.'/restaurantRules',$restaurantRule)}}" method="POST">
                @csrf
                @method('DELETE')
                <h3>Gerecht verwijderen van {{ $restaurant->facilitie->name }}</h3>
                <div hidden class="form-group">
                    <label for="restaurant_id">Restaurant</label>
                    <input disabled id="restaurant_id" name="restaurant_id" class="form-control" type="text" value="{{ $restaurantRule->restaurant->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="dish_id">Gerecht</label>
                    <input disabled id="dish_id" name="dish_id" class="form-control" type="text" value="{{ $restaurantRule->dish->name }}">
                </div>
                <button class="btn btn-primary" type="submit">Verwijder van menu</button>
            </form>
                @endcan
            @cannot('delete restaurantRules')
                @yield('content', View::make('errors.noPermission'))
            @endcannot
        </div>
    </section>

@endsection

