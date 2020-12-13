<?php

use Kirby\Toolkit\A;

return function ($page, $pages, $site, $kirby) {
    $sharedControllerData = $kirby->controller('site', [
        'page' => $page,
        'pages' => $pages,
        'site' => $site,
        'kirby' => $kirby,
    ]);

    return A::merge($sharedControllerData, [
        'browserTitle' => $site->title(),
    ]);
};
