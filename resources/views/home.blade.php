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
                        <a href="{{ route('books.show', $book->id) }}">
                            <div class="border p-4 rounded shadow h-48 flex flex-col justify-between bg-white">
                                <div>
                                    <h3 class="font-semibold text-sm truncate">{{ $book->title }}</h3>
                                    <p class="text-xs text-gray-600 mt-1 truncate">{{ $book->author }}</p>
                                </div>
                                <div class="h-6 bg-gray-200 mt-2 rounded"></div>
                                @auth
                                    <div class="flex justify-end">
                                        <livewire:favourite :book="$book" :key="$book->id" />
                                    </div>
                                @endauth
                            </div>
                        </a>
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
        <!-- Most View -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Most View</h2>
        <div class="flex gap-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @if (isset($mostViewed) && $mostViewed !== null)
                    @forelse ($mostViewed as $book)
                        <a href="{{ route('books.show', $book->id) }}">
                            <div class="border p-4 rounded shadow h-48 flex flex-col justify-between bg-white">
                                <div>
                                    <h3 class="font-semibold text-sm truncate">{{ $book->title }}</h3>
                                    <p class="text-xs text-gray-600 mt-1 truncate">{{ $book->author }}</p>
                                </div>
                                <div class="h-6 bg-gray-200 mt-2 rounded"></div>
                                @auth
                                    <div class="flex justify-end">
                                        <livewire:favourite :book="$book" :key="$book->id" />
                                    </div>
                                @endauth
                            </div>
                        </a>
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

@section('scripts')
    <script src="{{ asset('js/favourite.js') }}"></script>
@endsection
