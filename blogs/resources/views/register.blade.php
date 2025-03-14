<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<body>
    <div style="text-align: center ; margin-top: 200px; border: 1px solid #ccc; padding: 20px; text-size: 20px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <br>
            <br>
             <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
