@extends('layout.masterLogin')

@section('content')

    <section class="userSection">
        <div class="container">
            @can('show users')
            <div class="d-flex flex">
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/users') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="userTitle">{{ $user->name }}</h2>
            </div>

            @can('edit users')
                <a data-toggle="tooltip" data-placement="top" title="Aanpassen" href="{{$user->id.'/edit'}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
            @endcan
            @can('delete users')

                <a data-toggle="tooltip" data-placement="top" title="Verwijderen" href="{{$user->id.'/delete'}}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
            @endcan
            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Geboortedatum</th>
                    <td>{{ $user->date_of_birth }}</td>
                </tr>
                <tr>
                    <th>Adres</th>
                    <td>{{ $user->adress }}</td>
                </tr>
                <tr>
                    <th>Huisnummer</th>
                    <td>{{ $user->house_number }}</td>
                </tr>
                <tr>
                    <th>Postcode</th>
                    <td>{{ $user->postal_code }}</td>
                </tr>
                <tr>
                    <th>Telefoonnummer</th>
                    <td>{{ $user->phone_number }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </table>
            @endcan
                @cannot('show users')
                    @yield('content', View::make('errors.noPermission'))
                @endcannot
        </div>
    </section>

@endsection