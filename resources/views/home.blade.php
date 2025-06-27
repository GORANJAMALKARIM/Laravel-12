@extends('layouts.public')
@section('content')
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <p>This is the main content area of the home page.</p>
    </div>
   <a href="{{ 'about' }}" class="btn btn-primary">Go to About Page</a>
    @endsection