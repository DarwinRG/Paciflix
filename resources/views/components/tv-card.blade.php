<div class="mt-8 border border-gray-700 rounded-lg p-4">
    <a href="{{ route('tv.show', $tvshow['id']) }}">
        <img src="{{ $tvshow['poster_path'] }}" alt="poster"
            class="hover:opacity-75 transition ease-in-out duration-150 rounded">
    </a>
    <div class="mt-2">
        <a href="{{ route('tv.show', $tvshow['id']) }}"
            class="text-lg mt-2 hover:text-gray-300 block text-truncate">{{ $tvshow['name'] }}</a>
        <div class="flex items-center justify-between text-gray-400 text-sm mt-1">
            <div class="flex items-center">
                <svg class="w-4" viewBox="0 0 24 24" fill="cyan">
                    <g data-name="Layer 2">
                        <path
                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                            data-name="star" />
                    </g>
                </svg>
                <span class="ml-1">{{ round((float) $tvshow['vote_average']) }}%</span>
            </div>
            <span>{{ $tvshow['first_air_date'] }}</span>
        </div>
    </div>
</div>