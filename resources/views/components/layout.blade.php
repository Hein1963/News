<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ $title }}
    <link href="/app.css" rel="stylesheet">
</head>
<body>
    <x-navbar/>
    {{ $slot }}
    <script src="/app.js"></script>
</body>
</html>
