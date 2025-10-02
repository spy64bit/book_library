@extends('components.layouts.app')

@section('title', 'Books')
@section('content')
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between my-4">
            <h1 class="text-2xl font-bold mb-4">Book List</h1>
            <a href="{{ route('admin.books.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Book</a>
        </div>

        @if ($model->isEmpty())
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
                    @foreach ($model as $book)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->category }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->published_year }}</td>
                            <td class="border border-gray-300 px-4 py-2">

                                {{-- action buttons --}}
                                <div class="flex space-x-4">
                                    <a href="{{ route('admin.books.show', $book->id) }}"
                                        class="text-blue-600 hover:text-blue-800 transition p-0">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button
                                        onclick="document.getElementById('deleteBook{{ $book->id }}').classList.remove('hidden')"
                                        class="text-red-600 hover:text-red-800 transition p-0">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>


                                {{-- dialog --}}
                                <x-dialog id="deleteBook{{ $book->id }}"
                                    title="Are you sure you want to delete this book?">
                                    <form method="POST" action="{{ route('admin.books.destroy', $book->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </x-dialog>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $model->links() }}
            </div>



        @endif
    </div>
@endsection
