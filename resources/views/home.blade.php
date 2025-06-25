<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- <p>{{$name}}</p>
    <p>{{$message}}</p> --}}
    
    {{-- @if($name == 'John')// hier name not equal to John deswegen wird Hello Guest printen         <p>Hello John!</p>
    @else 
        <p>Hello Guest!</p>
    @endif --}}
    {{-- @php
      $name = 'Goran';   
    @endphp --}}
   
    {{-- @switch($name)
        @case('John')
            <p>Hello John!</p>
            @break
        @case('Jane')
            <p>Hello Jane!</p>
            @break
       @case('Goran')
            <p>Hello Goran!</p>
       @endswitch --}}
    {{-- @for ($i = 0; $i < 5; $i++)
    <p>i= {{ $i }}</p>
@endfor --}}
@php
        $users = [];//ich habe hier ein leeres Array erstellt
        // $users = ['John', 'Jane', 'Goran'];habe ich gelöscht
        //  und wir brauchen if else nicht mehr wir können direkt eine massege printen 
        
    @endphp
    @foreach ($users as $user)
        <p>{{ $user }}</p>
    @endforeach

    

    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>

    @forelse ($users as $user)
        <p>{{ $user }}</p>
    @empty

        <p>No users found.</p>
    @endforelse
   

    
</body>
</html>