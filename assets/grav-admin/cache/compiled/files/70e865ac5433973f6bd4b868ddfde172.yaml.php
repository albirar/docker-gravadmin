<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/markdown-fontawesome/blueprints.yaml',
    'modified' => 1678219187,
    'size' => 654,
    'data' => [
        'name' => 'Markdown Font Awesome',
        'version' => '1.1.1',
        'description' => 'Adds support for Font Awesome icons in Markdown using :emoji: syntax',
        'icon' => 'flag',
        'author' => [
            'name' => 'Nathan Parsons',
            'email' => 'github@tantalum.blue',
            'url' => 'https://github.com/n-parsons'
        ],
        'homepage' => 'https://github.com/n-parsons/grav-plugin-markdown-fontawesome',
        'keywords' => 'font awesome, emoji, icons',
        'bugs' => 'https://github.com/n-parsons/grav-plugin-markdown-fontawesome/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
