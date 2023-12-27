<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>

    <form action="{{ url('/update/' . $user[0]->id) }}" method="post">
        @csrf
        <label>name : <input type="text" name="name" value="{{$user[0]->name}}" required></label>
        <input type="submit" value="update" name="submit">
    </form>
    <h1><a href="{{url('/list')}}">list</a></h1>
</body>
</html>