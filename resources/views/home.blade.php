<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{$name}}</p>
    <p>{{$message}}</p>
    
    @if($name == 'John')// hier name not equal to John deswegen wird Hello Guest printen         <p>Hello John!</p>
    @else 
        <p>Hello Guest!</p>
    @endif
    

    
</body>
</html>