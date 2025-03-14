<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
</head>
<body>

    @auth
        <h1>Welcome {{ auth()->user()->name }}</h1>
        <br>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>

    @else
        <h1>Welcome</h1>
        <br>
        <form action="/register" method="GET">
            @csrf
            <button type="submit">Register</button>
        </form>
        <br>
        <br>
        <form action="/login" method="GET">
            @csrf
            <button type="submit">Login</button>
        </form>
    @endauth

</body>
</html>
