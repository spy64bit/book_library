@extends('components.layouts.app')

@section('title', 'Login')
@section('content')
    <div class="flex items-center justify-center min-h-screen flex-col md:flex-row bg-gray-100">
        <div class="pr-5 mb-5 text-center md:text-left">
            <h1 class="text-4xl font-bold">{{ config('app.name', 'Laravel') }}</h1>
            <h2 class="text-2xl max-w-md">A place to discover, learn, and explore the world of knowledge.</h2>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <input type="email" name="email" id="email" class="border border-gray-300 p-2 w-full"
                        placeholder="Email address" required>
                </div>
                <div class="mb-4">
                    <input type="password" name="password" id="password" class="border border-gray-300 p-2 w-full"
                        placeholder="Password" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Login</button>
                <hr class="border-t border-gray-300 my-4">
                {{-- <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded w-full">Register</button> --}}

            </form>
        </div>
    </div>
@endsection
