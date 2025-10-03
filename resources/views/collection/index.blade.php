@extends('components.layouts.app')

@section('title', 'Books')
@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">My Collection</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @if (isset($favouriteBooks) && $favouriteBooks !== null)
                @forelse ($favouriteBooks as $book)
                    <x-book-item :book="$book" />
                @empty
                    <p class="text-center col-span-full">You haven't added any books to your collection yet.</p>
                @endforelse
            @else
                <p class="text-center col-span-full">You haven't added any books to your collection yet.</p>
            @endif
        </div>
        <div class="mt-6">
            {{ $favouriteBooks->links() }}
        </div>
    </div>

@endsection
