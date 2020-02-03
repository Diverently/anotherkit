<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $site->title() ?></title>
    <?php echo mix('/css/main.css') ?>
</head>
<body>
    <h1><?= $page->title() ?></h1>

    <?php echo mix('/js/main.js') ?>
</body>
</html>
