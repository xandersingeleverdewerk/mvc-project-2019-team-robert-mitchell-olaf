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
                <a data-toggle="tooltip" data-placement="right" title="Ga terug naar overzicht" href="{{ url('/park/attractions') }}" class="btn btn-info "><span class="fa fa-arrow-left"></span></a>
                <h2 class="parkTitle">{{ $attraction->facilitie->name }}</h2>
            </div>

            <p class="attractionDescription">
                {{ $attraction->facilitie->description }}
            </p>

            <a data-toggle="tooltip" data-placement="top" title="Aanpassen" href="{{$attraction->id.'/edit'}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
            <a data-toggle="tooltip" data-placement="top" title="Verwijderen" href="{{$attraction->id.'/delete'}}" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>

            <h3>Aanvullende gegevens</h3>
            <table class="table table-responsive">
                <tr>
                    <th>Openingstijd</th>
                    <td>{{ $attraction->facilitie->opening_time }}</td>
                </tr>
                <tr>
                    <th>Sluitingstijd</th>
                    <td>{{ $attraction->facilitie->closing_time }}</td>
                </tr>
                <tr>
                    <th>Wachttijd</th>
                    <td>{{ $attraction->waitTime }}</td>
                </tr>
                <tr>
                    <th>Minimale leeftijd</th>
                    <td>{{ $attraction->minAge }}</td>
                </tr>
                <tr>
                    <th>Minimale lengte</th>
                    <td>{{ $attraction->minLength }}</td>
                </tr>
                <tr>
                    <th>Attractie id</th>
                    <td>{{ $attraction->id }}</td>
                </tr>
            </table>

            <h3>Reviews</h3>

            <div id="accordion">
                <form class="form" action="{{ route('attractions.storeReview')}}" method="POST">
                    @method('HEAD')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <input id="name" name="name" class="form-control" type="text" placeholder="Review naam" />
                        </div>
                        <div class="card-body">
                            <textarea id="review" name="review" class="form-control" type="text" placeholder="Plaats hier uw review"></textarea>
                            <button class="btn btn-primary" type="submit">Plaats Review</button>
                            <input hidden id="user_id" name="user_id" class="form-control" type="text" value="{{ Auth::user()->id }}" />
                            <input hidden id="facilitie_id" name="facilitie_id" class="form-control" type="text" value="{{ $attraction->facilitie->id }}" />
                        </div>

                    </div>
                </form>
                @foreach($reviews as $review)
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapse{{ $review->id }}">
                            {{ $review->name }}
                        </a>
                        <div class="cardLinks">
                            <button data-toggle="modal" data-target="#edit{{ $review->id }}" class="btn btn-outline-warning"><span class="fa fa-edit"></span></button>
                            <button data-toggle="modal" data-target="#delete{{ $review->id }}" class="btn btn-outline-danger"><span class="fa fa-trash-o"></span></button>
                    </div>
                </div>
                    <div id="collapse{{ $review->id }}" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>{{ $review->review }}</p>
                            <p class="reviewName">{{ $review->user->name }}</p>
                        </div>
                    </div>
                </div>

                    <div class="modal fade" id="edit{{ $review->id }}">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> {{ $review->name }} aanpassen</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="{{ route('attractions.updateReview', $review)}}" method="POST">
                                        @method('HEAD')
                                        @csrf
                                        <div class="card">
                                            <div class="card-header">
                                                <input id="name" name="name" class="form-control" type="text" value="{{ $review->name }}" />
                                            </div>
                                            <div class="card-body">
                                                <textarea id="review" name="review" class="form-control" type="text">{{ $review->review }}</textarea>
                                                <p class="reviewName">{{ $review->user->name }}</p>
                                                <button class="btn btn-primary" type="submit">Pas Review aan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleer</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="delete{{ $review->id }}">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> {{ $review->name }} verwijderen</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="{{ route('attractions.destroyReview', $review)}}" method="POST">
                                        @method('HEAD')
                                        @csrf
                                        <div class="card">
                                            <div class="card-header">
                                                {{ $review->name }}
                                            </div>
                                            <div class="card-body">
                                                <p>{{ $review->review }}</p>
                                                <p class="reviewName">{{ $review->user->name }}</p>
                                                <button class="btn btn-primary" type="submit">Verwijder</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
