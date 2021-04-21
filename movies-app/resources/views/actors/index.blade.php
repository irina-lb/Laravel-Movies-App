@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-5 pt-16 pl-14 ">
        <div class="popular-actorsmy-8">
            <h2 class="uppercase tracking-wider text-yellow-500 text-xl font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="actor mt-8">
                    <a href="#">
                        <img src="" alt="ups" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Roe</a>
                        <div class="text-sm truncate text-gray-400">Iron</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
