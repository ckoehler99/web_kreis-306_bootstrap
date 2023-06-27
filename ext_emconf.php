<?php

/**
 * Extension Manager/Repository config file for ext "kreis-306_bootstrap".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'kreis-306-bootstrap',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
             'bootstrap_package' => '13.0.0-13.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'kreis-306\\kreis-306_bootstrap\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Köhler',
    'author_email' => 'ckoehler@outlook.com',
    'author_company' => 'kreis-306',
    'version' => '1.0.0',
];
