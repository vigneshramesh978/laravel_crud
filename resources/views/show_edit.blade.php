<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<form action="{{ url('/show_update/' . $show->id) }}" method="post">
        @csrf
        <label>name : <input type="text" name="name" required value="{{$show->name}}"></label>
        <label>city : <input type="text" name="city" required value="{{$show->city}}"></label>
        <input type="submit" value="submit" name="submit">
    </form>
    <h1><a href="{{url('/show')}}">show</a></h1>

</body>
</html>