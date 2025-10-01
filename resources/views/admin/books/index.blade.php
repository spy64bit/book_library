@extends('components.layouts.app')

@section('title', 'Books')
@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Book List</h1>

        @if ($books->isEmpty())
            <p>No books available.</p>
        @else
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Author</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Category</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Year</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->category }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->published_year }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('books.show', $book->id) }}" class="text-blue-600 hover:underline">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $books->links() }}
            </div>

        @endif
    </div>
@endsection
