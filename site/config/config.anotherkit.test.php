<?php

return [
    'debug' => true,
    // Setup for HELO. For MailHog use port 1025
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'localhost',
            'port' => 2525,
            'security' => false,
        ],
    ],
];
