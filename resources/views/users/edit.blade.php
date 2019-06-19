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


                @auth
                    @if(Auth::user()->getRoleNames() == '["customer"]')

                <form class="form" action="{{route('users.edit', $user->id)}}" method="POST">
                    @csrf
                    @method('HEAD')
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input id="name" name="name" class="form-control" type="text" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Geboortedatum</label>
                        <input id="date_of_birth" name="description" class="form-control" type="text" value="{{ Auth::user()->date_of_birth }}"/>
                    </div>
                    <div class="form-group">
                        <label for="adress">Adres</label>
                        <input id="adress" name="adress" class="form-control" type="text" value="{{ Auth::user()->adress }}" />
                    </div>
                    <div class="form-group">
                        <label for="house_number">Huisnummer</label>
                        <input id="house_number" name="house_number" class="form-control" type="text" value="{{ Auth::user()->house_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postcode</label>
                        <input id="postal_code" name="postal_code" class="form-control" type="text" value="{{ Auth::user()->postal_code }}" />
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Telefoonnummer</label>
                        <input id="phone_number" name="phone_number" class="form-control" type="text" value="{{ Auth::user()->phone_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control" type="text" value="{{ Auth::user()->email }}" />
                    </div>
                    <button class="btn btn-primary" type="submit">Pas gegevens aan</button>
                </form>

                    @endif
                @endauth

        </div>
    </section>

@endsection