@extends('layout.master')

@section('content')

    <section class="userSection">
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

            @can('create users')
                <div class="d-flex flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/users') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="parkTitle">Gebruiker aanmaken</h2>
                </div>

                <form class="form" action="{{route('users.index')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input id="name" name="name" class="form-control" type="text" placeholder="Gebruiker naam" />
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Geboortedatum</label>
                        <textarea id="date_of_birth" name="date_of_birth" class="form-control" type="text" placeholder="Geboortedatum"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="adress">Adres</label>
                        <input id="adress" name="adress" class="form-control" type="text" placeholder="Adres" />
                    </div>
                    <div class="form-group">
                        <label for="house_number">Huisnummer</label>
                        <input id="house_number" name="house_number" class="form-control" type="text" placeholder="Huisnummer" />
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postcode</label>
                        <input id="postal_code" name="postal_code" class="form-control" type="text" placeholder="Postcode" />
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Telefoonnummer</label>
                        <input id="phone_number" name="phone_number" class="form-control" type="text" placeholder="Telefoonnummer" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control" type="text" placeholder="Email" />
                    </div>
                    <button class="btn btn-primary" type="submit">Maak Winkel</button>
                </form>
            @endcan

            @cannot('create users')
                @yield('content', View::make('errors.noPermission'))
            @endcannot

        </div>
    </section>

@endsection