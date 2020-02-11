<?php
$seoTitle = $site->seo_title()->isNotEmpty() ? $site->seo_title()->text() : $site->title()->text();
$seoDescription = $page->seo_description()->isNotEmpty() ? $page->seo_description()->text() : $site->seo_description()->text();
$seoImageUrl = $page->seo_image()->isNotEmpty() ? $page->seo_image()->toFile()->url() : $site->seo_image()->toFile()->url();

if (!$page->isHomeOrErrorPage()) {
    $pageTitle = $page->seo_title()->isNotEmpty() ? $page->seo_title()->text() : $page->title()->text();
    $seoTitle = "$pageTitle | $seoTitle";
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $seoTitle ?></title>
<?php echo mix("/css/main.css") ?>

<!-- SEO and Open Graph -->
<meta name="description" content="<?php echo $seoDescription ?>">
<meta property="og:title" content="<?php echo $seoTitle ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $page->url() ?>" />
<meta property="og:image" content="<?php echo $seoImageUrl ?>" />

<!-- For more information, visit https://schema.org/Organization -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo $site->title() ?>",
        "url": "<?php echo $site->url() ?>",
        "image": "<?php echo $seoImageUrl ?>",
    }
</script>
