<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    {{-- Erfolgs-Message --}}
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

<form action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required><br><br>

        <label>Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" required><br><br>

        <label>Note:</label>
        <input type="text" name="note" value="{{ $product->note }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>
</html>
