@extends('layout.master')

@section('content')

    <section class="attractionSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <div class="d-flex flex">
                @can('create attractions')
                <a data-toggle="tooltip" data-placement="right" title="Maak een attractie" href="{{ url('/park/attractions/create') }}" class="btn btn-success"><span class="fa fa-plus"></span></a>
                @endcan
                <h2 class="parkTitle">Attracties</h2>
            </div>

            <div class="d-flex justify-content-around row">
                @foreach($attractions as $attraction)
                    <a class="block" href="{{ url('park/attractions/'.$attraction->id) }}">
                        <h3 class="blockTitle">{{ $attraction->facilitie->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
