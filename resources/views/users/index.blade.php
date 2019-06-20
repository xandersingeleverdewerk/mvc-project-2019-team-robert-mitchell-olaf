@extends('layout.master')

@section('content')

    <section class="userSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif


            <div class="d-flex flex">
                @can('create users')
                    <a data-toggle="tooltip" data-placement="right" title="Maak een gebruiker" href="{{ url('/users/create') }}" class="btn btn-success"><span class="fa fa-plus"></span></a>
                @endcan
                <h2 class="userTitle">Gebruikers</h2>
            </div>


            <div class="d-flex justify-content-around row">
                @foreach($users as $user)
                    <a class="block" href="{{ url('users/'.$user->id) }}">
                        <h3 class="blockTitle">{{ $user->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection