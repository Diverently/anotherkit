<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php echo mix("/css/main.css") ?>

<?php snippet('meta_information'); ?>
<?php snippet('robots'); ?>

<?php echo mix('/js/main.js', ['defer' => true]) ?>
<link rel="icon" type="image/svg+xml" sizes="any" href="/images/favicon.svg">
<link rel="icon" type="image/png" href="/images/favicon.png">

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
