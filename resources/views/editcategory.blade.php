<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="/updatecategory/{{$category->id}}" method="post">
  @csrf
  <label for="">category name</label>
  <input type="text" name="cname" value="{{$category->name}}"><br>
  <input type="submit" value="update">
 </form>
</body>

</html>