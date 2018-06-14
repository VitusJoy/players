<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'mail' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport'=>false,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => ' smtp.mailtrap.io',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
            'username' => '26f8bab2c43774',
            'password' => '16410d3908f792',
            'port' => '2525', // Port 25 is a very common port too
            'encryption' => 'tls', // It is often used, check your provider or mail server specs
            ]
        ],
    ],
];
