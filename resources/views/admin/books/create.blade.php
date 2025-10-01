@extends('components.layouts.app')

@section('title', 'Create New Book')
@section('content')
    <div class="container mx-auto py-8">
        <form method="POST" action="{{ route('admin.books.store') }}">

            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="w-full border border-gray-300 p-2 rounded @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-bold mb-2">Author:</label>
                <input type="text" name="author" id="author" value="{{ old('author') }}"
                    class="w-full border border-gray-300 p-2 rounded @error('author') border-red-500 @enderror">
                @error('author')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
                <input type="text" name="category" id="category" value="{{ old('category') }}"
                    class="w-full border border-gray-300 p-2 rounded @error('category') border-red-500 @enderror">
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="published_year" class="block text-gray-700 font-bold mb-2">Published Year:</label>
                <input type="number" name="published_year" id="published_year" value="{{ old('published_year') }}"
                    class="w-full border border-gray-300 p-2 rounded @error('published_year') border-red-500 @enderror">
                @error('published_year')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full border border-gray-300 p-2 rounded @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('admin.books.index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
            </div>
        </form>
    </div>
@endsection
