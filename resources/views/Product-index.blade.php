<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <form action="{{ route('products.store')}}" method="POST">
    @csrf
   <input type="text" name="name" placeholder="name">
   <input type="number" name="price" placeholder="price">
    <input type="text" name="note" placeholder="note">
   <button type="submit">Submit</button></form>
   <Table>
         <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
         </thead>
         <tbody>
              @foreach ($products as $index=> $product)
                <tr>
                     <td>{{ $index+1 }}</td>
                     <td>{{ $product->name }}</td>
                     <td>{{ $product->price }}</td>
                     <td>{{ $product->note }}</td>
                         <td><a href="{{ route('products.edit',['product'=>$product->id]) }}">Edit</a></td>
                </tr>
              @endforeach
              
         </tbody>
   </Table>
</form>
</body>
</html>