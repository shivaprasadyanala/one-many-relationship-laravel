<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="/add" method="post">
  @csrf
  <label for="">product name</label>
  <input type="text" name="pname"><br>
  <label for="">product price</label>
  <input type="number" name="price"><br>
  <label for="">category name</label>
  <select name="c_id" id="" value="">
   <option value="">select category</option>
   @foreach($category as $cat)
   <option value="{{$cat->id}}">{{$cat->name}}</option>
   @endforeach

  </select>
  <br>
  <a href="/addcatform">new category</a>
  <br>
  <br>
  <input type="submit" value="add product">
 </form>
</body>

</html>