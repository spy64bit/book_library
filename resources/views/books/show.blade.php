@extends('components.layouts.app')

@section('title', $model->title)
@section('content')

    <div class="container mx-auto py-8">
        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-3xl font-bold mb-4">{{ $model->title }}</h1>
            <p class="text-gray-700 mb-2"><strong>Author:</strong> {{ $model->author }}</p>
            <p class="text-gray-700 mb-2"><strong>Category:</strong> {{ $model->category }}</p>
            <p class="text-gray-700 mb-2"><strong>Published Year:</strong> {{ $model->published_year }}</p>
            <div class="mt-4">
                <h2 class="text-2xl font-semibold mb-2">Description</h2>
                <p class="text-gray-800">{{ $model->description }}</p>
            </div>
        </div>

        <div class="mt-8">
            <livewire:book-comments :book="$model" />
        </div>

    </div>

@endsection
