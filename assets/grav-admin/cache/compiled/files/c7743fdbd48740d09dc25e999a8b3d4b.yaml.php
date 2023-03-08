<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/plugins/email.yaml',
    'modified' => 1678219187,
    'size' => 574,
    'data' => [
        'enabled' => true,
        'from' => 'webmaster@albirar.cat',
        'from_name' => 'Albirar',
        'to' => 'ofornes@albirar.cat',
        'to_name' => 'Octavi Fornés',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp-relay.sendinblue.com',
                'port' => 587,
                'encryption' => 'none',
                'user' => 'webmaster@albirar.cat',
                'password' => 'FdpGfDCXJQ4L2h9Z',
                'auth_mode' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true,
        'charset' => NULL,
        'cc' => NULL,
        'cc_name' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'reply_to_name' => NULL,
        'body' => NULL
    ]
];
