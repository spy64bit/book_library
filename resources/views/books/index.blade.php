@extends('components.layouts.app')

@section('title', 'Books')
@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Books</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @if (isset($model) && $model !== null)
                @forelse ($model as $book)
                    <x-book-item :book="$book" />
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
