<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <a href="/products">home</a>
 </table>
 <h1>product table</h1>
 <table border="1">
  <th>id</th>
  <th>category_id</th>
  <th>product name</th>
  <th>product price</th>
  <th colspan="2">operations</th>
  @foreach ($products as $item)
  <tr>
   <td>{{ $item->id }}</td>
   <td>{{ $item->c_id }}</td>
   <td>{{ $item->name }}</td>
   <td>{{ $item->price }}</td>
   <td>
    <a href="{{url('editproduct/'.$item->id)}}" class="btn btn-danger btn-sm">Edit</a>
   </td>
   <td>
    <a href="{{url('deleteproduct/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
   </td>
  </tr>
  @endforeach

 </table>
</body>

</html>