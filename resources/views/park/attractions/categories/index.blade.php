@extends('layout.masterLogin')

@section('content')

    <section class="attractionSection">
        <div class="container">

            @if (session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <h2>Categories</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/park/attractions/categories') }}">Overzicht</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ url('/park/attractions/categories/create') }}">Maken <span class="fa fa-plus"></span></a>
                </li>
            </ul>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th colspan=3>Linkjes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $categorie)
                        <tr>
                            <td>{{ $categorie->name }}</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Aanpassen" class="btn btn-warning" href="{{ url('park/attractions/categories/'.$categorie->id.'/edit') }}"><span class="fa fa-edit"></span></a></td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Verwijderen" class="btn btn-danger" href="{{ url('park/attractions/categories/'.$categorie->id.'/delete') }}"><span class="fa fa-trash-o"></span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
