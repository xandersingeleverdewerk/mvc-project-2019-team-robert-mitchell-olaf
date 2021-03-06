@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif


                <div class="d-flex flex">
                    @can('create stores')
                    <a data-toggle="tooltip" data-placement="right" title="Maak een winkel" href="{{ url('/park/stores/create') }}" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    @endcan
                    <h2 class="parkTitle">Winkels</h2>
                </div>


            <div class="d-flex justify-content-around row">
            @foreach($stores as $store)
                <a class="block" href="{{ url('park/stores/'.$store->id) }}">
                    <h3 class="blockTitle">{{ $store->facilitie->name }}</h3>
                </a>
            @endforeach
            </div>
        </div>
    </section>

@endsection