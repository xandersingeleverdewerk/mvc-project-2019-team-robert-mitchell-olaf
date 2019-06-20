@extends('layout.master')

@section('content')

    <section class="storeSection">
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

            @can('create stores')
                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/park/stores') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Winkel aanmaken</h2>
                </div>

            <form class="form" action="{{route('stores.index')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" placeholder="Winkel naam" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea id="description" name="description" class="form-control" type="text" placeholder="Beschrijving winkel"></textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input id="opening_time" name="opening_time" class="form-control" type="time" placeholder="Openingstijd" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input id="closing_time" name="closing_time" class="form-control" type="time" placeholder="Sluitingstijd" />
                </div>
                <button class="btn btn-primary" type="submit">Maak Winkel</button>
            </form>
                @endcan

                @cannot('create stores')
                    @yield('content', View::make('errors.noPermission'))
                @endcannot

        </div>
    </section>

@endsection