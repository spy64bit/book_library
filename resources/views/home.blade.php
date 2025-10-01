@extends('components.layouts.app')

@section('title', 'Home')
@section('content')
    <div class="container mx-auto py-8">

        <!-- New Arrivals -->
        <h2 class="text-2xl font-bold mb-4">New Arrivals</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @if (isset($newBooks) && $newBooks !== null)
                @forelse ($newBooks as $book)
                    <div class="border p-4 rounded shadow">
                        <h3 class="font-semibold">{{ $book->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $book->author }}</p>
                    </div>
                @empty
                    @for ($i = 0; $i < 5; $i++)
                        <x-book_skeleton />
                    @endfor
                @endforelse
            @else
                @for ($i = 0; $i < 5; $i++)
                    <x-book_skeleton />
                @endfor
            @endif
        </div>


        <!-- Most View -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Most View</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @if (isset($mostViewed) && $mostViewed !== null)
                @forelse ($mostViewed as $book)
                    <div class="border p-4 rounded shadow">
                        <h3 class="font-semibold">{{ $book->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $book->author }}</p>
                    </div>
                @empty
                    @for ($i = 0; $i < 5; $i++)
                        <x-book_skeleton />
                    @endfor
                @endforelse
            @else
                @for ($i = 0; $i < 5; $i++)
                    <x-book_skeleton />
                @endfor
            @endif
        </div>

    </div>
@endsection
