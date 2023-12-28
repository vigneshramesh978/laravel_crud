<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    <form action="{{url('/insert')}}" method="post">
        @csrf
        <label>name : <input type="text" name="name" required></label>
        <input type="submit" value="submit" name="submit">
    </form>
    <h1><a href="{{url('/list')}}">list</a></h1>
    <hr>

    <form action="{{url('/add')}}" method="post">
        @csrf
        <label>name : <input type="text" name="name" required></label>
        <label>city : <input type="text" name="city" required></label>
        <input type="submit" value="submit" name="submit">
    </form>
    <h1><a href="{{url('/list')}}">show</a></h1>

</body>
</html>