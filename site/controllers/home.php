<?php

use Kirby\Toolkit\A;

return function ($page, $pages, $site, $kirby) {
    $sharedControllerData = $kirby->controller('site' , compact('page', 'pages', 'site', 'kirby'));
    $seoTitle = $site->title();

    return A::merge($sharedControllerData , compact('seoTitle'));
};
