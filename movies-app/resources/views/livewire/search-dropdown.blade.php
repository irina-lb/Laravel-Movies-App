<div class="relative" x-data="{isOpen:true}" @click.away="isOpen=false">
    <input type="text" wire:model.debounce.500ms="search"
        class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline text-sm"
        placeholder="Search" @focus="isOpen=true" @keydown="isOpen=true" @keydown.escape.window="isOpen=false"
        @keydown.shift.tab="isOpen=false">
    <div class="absolute top-0">
        <svg class="fill-current text-gray-500 w-3 mt-2 ml-2" aria-hidden="true" focusable="false" data-prefix="fas"
            data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
            </path>
        </svg>
    </div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show.transition.opacity="isOpen">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-fray-700">
                            <a href="{{ route('movies.show', $result['id']) }}"
                                class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                @if ($loop->last) @keydown.tab="isOpen=false" @endif>
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="img"
                                        class="w-8">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
