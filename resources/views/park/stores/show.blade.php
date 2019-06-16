@extends('layout.master')

@section('content')

    <section class="storeSection">
        <div class="container">
            <div class="d-flex flex">
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/park/stores') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="parkTitle">{{ $store->facilitie->name }}</h2>
            </div>

            <p class="storeDescription">
                {{ $store->facilitie->description }}
            </p>

<<<<<<< HEAD
            @can('edit stores')
                <a href="{{$store->id.'/edit'}}" class="btn btn-warning">Aanpassen</a>
            @endcan
            @can('delete stores')
                <a href="{{$store->id.'/delete'}}" class="btn btn-danger">Verwijderen</a>
            @endcan
            @can('show storeRules')
                <a href="{{$store->id.'/storeRules'}}" class="btn btn-dark">Bekijk assortiment</a>
            @endcan
=======
            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" href="{{$store->id.'/edit'}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" href="{{$store->id.'/delete'}}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                <a href="{{$store->id.'/storeRules'}}" class="btn btn-dark">Bekijk assortiment</a>
>>>>>>> 6e61c06a1be115890a73de2139c440eece6a9e48

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Openingstijd</th>
                    <td>{{ $store->facilitie->opening_time }}</td>
                </tr>
                <tr>
                    <th>Sluitingstijd</th>
                    <td>{{ $store->facilitie->closing_time }}</td>
                </tr>
                @can('show storeId')
                <tr>
                    <th>Winkel id</th>
                    <td>{{ $store->id }}</td>
                </tr>
                    @endcan
            </table>
        </div>
    </section>

@endsection