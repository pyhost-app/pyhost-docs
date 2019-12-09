<?php

return [
    'Getting Started' => 'docs/getting-started',
    'Servers' => [
        'url' => 'docs/server',
        'children' => [
            'Databases' => 'docs/databases',
            'SSH Keys' => 'docs/ssh-keys',
            'Envionment Variables' => 'docs/environment-variables'
        ]
    ],
    'Sites' => [
        'url' => 'docs/sites',
        'children' => [
            'Managing Dependencies' => 'docs/site-dependencies',
        ]
    ],
    'DNS Management' => 'docs/dns',
    'Deployments' => 'docs/deployments',
    // 'Navigation' => 'docs/navigation',
    // 'Algolia DocSearch' => 'docs/algolia-docsearch',
    // 'Custom 404 Page' => 'docs/custom-404-page',
    // 'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
