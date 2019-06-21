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

            @can('delete users')
                <div class="d-flex">
                    <a data-toggle="tooltip" data-placement="right" title="Ga terug naar details" href="{{ url('users/'.$user->id) }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                    <h2 class="userTitle">{{ $user->name }} verwijderen</h2>
                </div>

                <form class="form" action="{{route('users.destroy', $user)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="id">Gebruiker id</label>
                        <input disabled id="id" name="id" class="form-control" type="text" value="{{ $user->id }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->date_of_birth }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->adress }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->house_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->postal_code }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->phone_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled id="name" name="name" class="form-control" type="text" value="{{ $user->email }}" />
                    </div>
                    <button class="btn btn-primary" type="submit">Verwijder Gebruiker</button>
                </form>
            @endcan

            @cannot('delete users')
                @yield('content', View::make('errors.noPermission'))
            @endcannot
        </div>
    </section>

@endsection