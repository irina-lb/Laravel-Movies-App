@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-5 pt-16 pl-14 ">
        <div class="popular-movies my-8">
            <h2 class="uppercase tracking-wider text-yellow-500 text-xl font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
        <div class="now-playing-movies my-16">
            <h2 class="uppercase tracking-wider text-yellow-500 text-xl font-semibold">Now playing movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
