<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link href="/app.css" rel="stylesheet">
</head>
<body>
    <nav>
        <li>
            <a href="">Main</a>
        </li>
        <li>
            <a href="">About</a>
        </li>
        <li>
            <a href="">Contact</a>
        </li>
    </nav>

    @yield('content')

    <script src="/app.js"></script>
</body>
</html>