<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    index of product
   <Table>
         <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
              </tr>
         </thead>
         <tbody>
              @foreach ($products as $product)
                <tr>
                     <td>{{ $product->id }}</td>
                     <td>{{ $product->name }}</td>
                     <td>{{ $product->price }}</td>
                     <td>{{ $product->note }}</td>
                </tr>
              @endforeach
         </tbody>
   </Table>
   
</body>
</html>