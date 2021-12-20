<?php

return function ($page, $pages, $site, $kirby) {
    // Set site wide variables
    $foo = 'Bar';

    return [
        'foo' => $foo,
    ];
};
