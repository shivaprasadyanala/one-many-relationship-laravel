<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="/updateproduct/{{$product->id}}" method="post">
  @csrf
  <label for="">product name</label>
  <input type="text" name="pname" value="{{$product->name}}"><br>
  <label for="">product price</label>
  <input type="text" name="price" value="{{$product->price}}"><br>
  <input type="submit" value="update">
 </form>
</body>

</html>