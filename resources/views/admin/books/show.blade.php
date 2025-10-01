@extends('components.layouts.app')

@section('title', 'Books')
@section('content')
    <div class="container mx-auto py-8">
        <form method="post">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $model->title) }}"
                    class="w-full border border-gray-300 p-2 rounded @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-bold mb-2">Author:</label>
                <input type="text" name="author" id="author" value="{{ old('author', $model->author) }}"
                    class="w-full border border-gray-300 p-2 rounded @error('author') border-red-500 @enderror">
                @error('author')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
                <input type="text" name="category" id="category" value="{{ old('category', $model->category) }}"
                    class="w-full border border-gray-300 p-2 rounded @error('category') border-red-500 @enderror">
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="published_year" class="block text-gray-700 font-bold mb-2">Published Year:</label>
                <input type="number" name="published_year" id="published_year"
                    value="{{ old('published_year', $model->published_year) }}"
                    class="w-full border border-gray-300 p-2 rounded @error('published_year') border-red-500 @enderror">
                @error('published_year')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full border border-gray-300 p-2 rounded @error('description') border-red-500 @enderror">{{ old('description', $model->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </form>
    </div>
@endsection
