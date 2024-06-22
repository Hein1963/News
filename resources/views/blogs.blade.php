<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="/app.css" rel="stylesheet">
</head>
<body>
    <?php foreach($blogs as $blog): ?>
        <h1><a href="blogs/<?= $blog->slug; ?>"><?= $blog->title; ?></a></h1>
        
        <div>
            <p>
                published at-
                <?= $blog->date; ?>
            </p>
            <p>
                <?= $blog->intro; ?>
            </p>
        </div>
    <?php endforeach ?>
    <script src="/app.js"></script>
</body>
</html>