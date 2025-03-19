<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <div style="text-align: center ; margin-top: 200px; border: 1px solid #ccc; padding: 20px; text-size: 20px;">
        <form action="/welcome" method="GET">
            @csrf
            <button type="submit">Welcome Page</button>
        </form>

        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <label for="loginEmail">Email</label>
            <input type="email" name="loginEmail" id="loginEmail" placeholder="Email">

            <label for="loginPassword">Password</label>
            <input type="password" name="loginPassword" id="loginPassword" placeholder="Password">

            <br>
            <br>
            <button type="submit">Login</button>

        </form>
        <h2>OR</h2>
        <form action="/register" method="GET">
            @csrf
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
