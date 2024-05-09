@extends('layouts.app')

@section('content')
    <h1 class="text-center py-5">I migliori film della storia</h1>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-5">

            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card py-3">
                        <h3 class="card-title text-center">{{ $movie->title }}</h3>

                        <div class="card-body text-center">
                            <h4>Originale title: {{ $movie->originale_title }}</h4>
                            <p>
                                "This movies is a {{ $movie->nationality }} production"
                            </p>
                            <p>
                                "This movie was launched in {{ $movie->date }}"
                            </p>
                            <p>
                                "It has an average score of {{ $movie->vote }}"
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
