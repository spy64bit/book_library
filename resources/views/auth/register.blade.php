@extends('components.layouts.app')

@section('title', 'Register')
@section('content')
    <div class="flex items-center justify-center min-h-screen flex-col md:flex-row">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <input name="name" id="name" class="border border-gray-300 p-2 w-full" placeholder="Name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 text-sm mb-4">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input name="email" id="email" class="border border-gray-300 p-2 w-full"
                        placeholder="Email address" value="{{ old('email') }}">
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

                <div class="mb-4">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="border border-gray-300 p-2 w-full" placeholder="Confirm Password">
                    @error('password_confirmation')
                        <div class="text-red-500 text-sm mb-4">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded w-full">Sign Up</button>
                <a href="{{ route('login') }}" class="text-blue-500 flex justify-center mt-4">Already have an account?</a>
            </form>
        </div>
    </div>
@endsection
