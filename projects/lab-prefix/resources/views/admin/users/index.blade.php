<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Users</title>
    </head>
<body>
    <h1>Users</h1>
    <ul>
        @foreach($users as $u)
            <li><a href="/admin/users/{{ $u['id'] }}">{{ $u['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>


