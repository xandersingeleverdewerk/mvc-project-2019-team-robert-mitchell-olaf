@extends('layout.master')

@section('content')

    <section class="attractionSection">
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

            @can('delete attractions')
              <div class="d-flex">
                  <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('park/attractions/'.$attraction->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                  <h2 class="parkTitle">{{ $attraction->facilitie->name }} verwijderen</h2>
              </div>

            <form class="form" action="{{route('attractions.destroy', $attraction)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <label for="id">Attraction id</label>
                    <input disabled id="id" name="id" class="form-control" type="text" value="{{ $attraction->id }}" />
                </div>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input disabled id="name" name="name" class="form-control" type="text" value="{{ $attraction->facilitie->name }}" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea disabled id="description" name="description" class="form-control" type="text">{{ $attraction->facilitie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="opening_time">Openingstijd</label>
                    <input disabled id="opening_time" name="opening_time" class="form-control" type="time" value="{{ $attraction->facilitie->opening_time }}" />
                </div>
                <div class="form-group">
                    <label for="closing_time">Sluitingstijd</label>
                    <input disabled id="closing_time" name="closing_time" class="form-control" type="time" value="{{ $attraction->facilitie->closing_time }}" />
                </div>
                <div class="form-group">
                    <label for="waitTime">Wachttijd</label>
                    <input disabled id="waitTime" name="waitTime" class="form-control" type="time" value="{{ $attraction->waitTime }}" />
                </div>
                <div class="form-group">
                    <label for="minAge">Minimale leeftijd</label>
                    <input disabled id="minAge" name="minAge" class="form-control" type="number" value="{{ $attraction->minAge }}" />
                </div>
                <div class="form-group">
                    <label for="minLength">Minimale hoogte</label>
                    <input disabled id="minLength" name="minLength" class="form-control" type="number" step="any" value="{{ $attraction->minLength }}" />
                </div>
                <div class="form-group">
                    <label for="categorie_id">Categorie</label>
                    <input disabled id="categorie_id" name="categorie_id" class="form-control" type="text" value="{{ $attraction->categories->name }}">
                </div>
                <button class="btn btn-primary" type="submit">Verwijder Attractie</button>
            </form>

                @endcan
                @cannot('delete attractions')
                    @yield('content', View::make('errors.noPermission'))
                @endcannot
        </div>
    </section>

@endsection

