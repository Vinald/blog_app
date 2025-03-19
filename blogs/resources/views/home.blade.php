<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
</head>
<body>

    @auth
        <form action="/welcome" method="GET">
            @csrf
            <button type="submit">Welcome Page</button>
        </form>
        <h1>Welcome {{ auth()->user()->name }}</h1>
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title">
            <label for="body">Content</label>
            <textarea name="body" id="body" placeholder="body"></textarea>
            <br>
            <button type="submit">Create Post</button>
        </form>
        <div>
            <h2>All posts</h2>
            @foreach($posts as $post)
                <div>
                    <h3>{{$post['title']}}</h3>
                    <p>{{$post['body2']}}</p>
                </div>
            @endforeach
        </div>
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
