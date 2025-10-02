@extends('components.layouts.app')

@section('title', 'Books')
@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Books</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @if (isset($model) && $model !== null)
                @forelse ($model as $book)
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
                    @for ($i = 0; $i < 10; $i++)
                        <x-book_skeleton />
                    @endfor
                @endforelse
            @else
                @for ($i = 0; $i < 10; $i++)
                    <x-book_skeleton />
                @endfor
            @endif
        </div>
        <div class="mt-6">
            {{ $model->links() }}
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/favourite.js') }}"></script>
@endsection
