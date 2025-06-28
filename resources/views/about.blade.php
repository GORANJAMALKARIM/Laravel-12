@extends('layouts.public')
@section('content')
    <div class="container">
        <h1>Welcome to the About Page</h1>
        <p>This is the main content area of the about page.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Go to Home Page</a>
    </div>
    @endsection