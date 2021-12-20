<?php

use Kirby\Toolkit\A;

return function ($page, $pages, $site, $kirby) {
    $sharedControllerData = $kirby->controller('site', [
        'page' => $page,
        'pages' => $pages,
        'site' => $site,
        'kirby' => $kirby,
    ]);

    // Overwrite the default controller
    return A::merge($sharedControllerData, [
        'foo' => 'Baz',
    ]);
};
