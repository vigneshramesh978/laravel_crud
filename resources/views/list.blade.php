
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Users List &nbsp&nbsp&nbsp<span><a href="{{url('/')}}">insert page</a></span></h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user1)
            <tr>
                <td>{{$user1->id}}</td>
                <td>{{$user1->name}}</td>
                <td><a href="edit/{{$user1->id}}">edit</a></td>
                <td><a href="delete/{{$user1->id}}" onclick="return confirm('are you sure to delete..?')">delete</a></td>

            </tr>
            @endforeach
       
        </tbody>
    </table>

</body>
</html>
