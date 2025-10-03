@extends('components.layouts.app')

@section('title', 'Home')
@section('content')
    <div class="container mx-auto py-8">

        <!-- New Arrivals -->
        <h2 class="text-2xl font-bold mb-4">New Arrivals</h2>
        <div class="flex gap-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @if (isset($newBooks) && $newBooks !== null)
                    @forelse ($newBooks as $book)
                        <x-book-item :book="$book" />
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
            <div class="flex items-start">
                <a href="{{ route('books.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-full">View
                    More</a>
            </div>
        </div>
        <!-- Highest Rating -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Highest Rating</h2>
        <div class="flex gap-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @if (isset($highestRated) && $highestRated !== null)
                    @forelse ($highestRated as $book)
                        <x-book-item :book="$book" />
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
            <div class="flex items-start">
                <a href="{{ route('books.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-full">View
                    More</a>
            </div>
        </div>
    </div>
@endsection
