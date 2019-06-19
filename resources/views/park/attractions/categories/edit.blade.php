@extends('layout.master')

@section('content')

    <section class="attractionSection">
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

            <h2>Categorieën</h2>

            {{--<ul class="nav nav-tabs">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ url('/park/stores/products') }}">Overzicht</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ url('/park/stores/products/create') }}">Maken <span class="fa fa-plus"></span></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ url('/park/stores/products/'.$product->id) }}">Details</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link active">Aanpassen <span class="fa fa-edit"></span></a>--}}
                {{--</li>--}}
            {{--</ul>--}}

            <form class="form" action="{{route('categories.update', $category)}}" method="POST">
                @csrf
                @method('PATCH')
                <h3>{{ $category->name }} aanpassen</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" value="{{ $category->name }}" />
                </div>
                <button class="btn btn-primary" type="submit">Pas Categorie Aan</button>
            </form>
        </div>
    </section>

@endsection
