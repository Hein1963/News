<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="/app.css" rel="stylesheet">
</head>
<body>
    <h1>{{ $blog->title }}</h1>
    <p>{!! $blog->body !!}</p>
    <a href="/">go back</a>
    <script src="/app.js"></script>
</body>
</html>