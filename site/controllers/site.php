<?php

return function ($page, $pages, $site, $kirby) {
    // Fetch and store the content for the title, meta description and OG image
    $seoTitle = $site->title()->text();

    if (!$page->isHomeOrErrorPage()) {
        $pageTitle = $page->seo_title()->isNotEmpty() ? $page->seo_title()->text() : $page->title()->text();
        $seoTitle = "$pageTitle | $seoTitle";
    }

    // Description
    $seoDescription = $site->seo_description()->text();

    if ($page->seo_description()->isNotEmpty()) {
        $seoDescription = $page->seo_description()->text();
    }

    // Image
    $seoImageUrl = "";

    if ($site->seo_image()->isNotEmpty()) {
        $seoImageUrl = $site->seo_image()->toFile()->url();
    }

    if ($page->seo_image()->isNotEmpty()) {
        $seoImageUrl = $page->seo_image()->toFile()->url();
    }

    // Return an array containing the data that we want to pass to the template
    return compact("seoTitle" , "seoDescription", "seoImageUrl");
};
