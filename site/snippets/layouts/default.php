<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= mix("/css/main.css") ?>

    <?php snippet('meta_information'); ?>
    <?php snippet('robots'); ?>

    <?= mix('/js/main.js', ['defer' => true]) ?>

    <link rel="icon" href="/favicon/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.webmanifest">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-gray-50">
    <?= $slot ?>
</body>
</html>
