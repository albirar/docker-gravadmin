<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/site.yaml',
    'modified' => 1678219187,
    'size' => 481,
    'data' => [
        'title' => 'Albirar',
        'default_lang' => 'ca',
        'author' => [
            'name' => 'Octavi Fornés',
            'email' => 'webmaster@albirar.cat'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Software Architect, Fullstack designer & developer, Agile specialist'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ],
        'links' => [
            0 => [
                'title' => 'About',
                'url' => '#about'
            ],
            1 => [
                'title' => 'Download',
                'url' => '#download'
            ],
            2 => [
                'title' => 'Contact',
                'url' => '#contact'
            ]
        ]
    ]
];
