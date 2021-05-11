<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $browserTitle ?></title>
<?php echo mix("/css/main.css") ?>
<link rel="icon" type="image/png" href="/images/favicon.png">

<!-- SEO and Open Graph -->
<meta name="description" content="">
<meta property="og:title" content="<?php echo $browserTitle ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $page->url() ?>" />
<meta property="og:image" content="" />

<!-- For more information, visit https://schema.org/Organization -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo $site->title() ?>",
        "url": "<?php echo $site->url() ?>",
        "image": "",
    }
</script>
