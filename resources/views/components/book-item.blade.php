<a href="{{ route('books.show', $book->id) }}">
    <div class="border p-4 rounded shadow h-48 flex flex-col justify-between bg-white">
        <div>
            <h3 class="font-semibold text-sm truncate">{{ $book->title }}</h3>
            <p class="text-xs text-gray-600 mt-1 truncate">{{ $book->author }}</p>
            <x-avg-rating :book="$book" />
        </div>
        <div class="h-6 bg-gray-200 mt-2 rounded"></div>
        @auth
            <div class="flex justify-end">
                <livewire:favourite :book="$book" :key="$book->id" />
            </div>
        @endauth
    </div>
</a>
