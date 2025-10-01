@extends('components.layouts.app')

@section('title', 'Login')
@section('content')
    <div class="flex items-center justify-center min-h-screen flex-col md:flex-row">
        <div class="pr-5 mb-5 text-center md:text-left">
            <h1 class="text-4xl font-bold">{{ config('app.name', 'Laravel') }}</h1>
            <h2 class="text-2xl max-w-md">A place to discover, learn, and explore the world of knowledge.</h2>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <form method="post">
                @csrf
                <div class="mb-4">
                    <input name="email" id="email" class="border border-gray-300 p-2 w-full" placeholder="Email address">
                    @error('email')
                        <div class="text-red-500 text-sm mb-4">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="password" name="password" id="password" class="border border-gray-300 p-2 w-full"
                        placeholder="Password">
                    @error('password')
                        <div class="text-red-500 text-sm mb-4">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full"
                    formaction="{{ route('login') }}">Login</button>
                <hr class="border-t border-gray-300 my-4">
                <div class="flex justify-center">
                    <a href="{{ route('register') }}"
                        class="bg-green-500 text-white px-4 py-2 rounded w-2/3 text-center inline-block">
                        Register
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
