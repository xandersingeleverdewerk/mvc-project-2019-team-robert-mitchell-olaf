@extends('layout.masterLogin')

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

@can('edit users')
                    @auth
                        @if(Auth::user()->id == $user->id or Auth::user()->getRoleNames() == '["admin"]')
                    <div class="d-flex">
                        <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('users/'.$user->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                        <h2 class="userTitle">Gegevens</h2>
                    </div>

                <form class="form" action="{{route('users.update', $user)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input id="name" name="name" class="form-control" type="text" value="{{ $user->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Geboortedatum</label>
                        <input id="date_of_birth" name="date_of_birth" class="form-control" type="text" value="{{ $user->date_of_birth }}"/>
                    </div>
                    <div class="form-group">
                        <label for="adress">Adres</label>
                        <input id="adress" name="adress" class="form-control" type="text" value="{{ $user->adress }}" />
                    </div>
                    <div class="form-group">
                        <label for="house_number">Huisnummer</label>
                        <input id="house_number" name="house_number" class="form-control" type="text" value="{{ $user->house_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postcode</label>
                        <input id="postal_code" name="postal_code" class="form-control" type="text" value="{{ $user->postal_code }}" />
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Telefoonnummer</label>
                        <input id="phone_number" name="phone_number" class="form-control" type="text" value="{{ $user->phone_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control" type="text" value="{{ $user->email }}" />
                    </div>
                    <button class="btn btn-primary" type="submit">Pas gegevens aan</button>
                </form>
                            @else
                            @yield('content', View::make('errors.noPermission'))
                        @endif

                    @endauth
                    @endcan
        </div>
    </section>

@endsection