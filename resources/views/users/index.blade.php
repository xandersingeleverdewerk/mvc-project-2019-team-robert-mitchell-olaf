@extends('layout.masterLogin')

@section('content')

    <section class="userSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif
@can('show users')
            <div class="d-flex flex">
                    {{--<a data-toggle="tooltip" data-placement="right" title="Maak een gebruiker" href="{{ url('/users/create') }}" class="btn btn-success"><span class="fa fa-plus"></span></a>--}}

                <h2 class="userTitle">Gebruikers</h2>
            </div>

            <div class="d-flex justify-content-around row">
                @foreach($users as $user)
                    <a class="block" href="{{ url('users/'.$user->id) }}">
                        <h3 class="blockTitle">{{ $user->name }}</h3>
                    </a>
                @endforeach
            </div>
            @endcan
            @cannot('show users')
                    @yield('content', View::make('errors.noPermission'))
                @endcannot
        </div>
    </section>

@endsection