@extends('components.layouts.app')

@section('title', 'Home')
@section('content')
    <h1>Welcome to {{ config('app.name', 'Laravel') }}</h1>
    <p>This is the homepage content.</p>
@endsection
