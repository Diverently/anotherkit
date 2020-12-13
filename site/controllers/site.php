<?php

return function ($page, $pages, $site, $kirby) {
    $browserTitle = $site->title()->text();

    if (! $page->isHomeOrErrorPage()) {
        $pageTitle = $page->title()->text();
        $browserTitle = "{$pageTitle} | {$browserTitle}";
    }

    return [
        'browserTitle' => $browserTitle,
    ];
};
