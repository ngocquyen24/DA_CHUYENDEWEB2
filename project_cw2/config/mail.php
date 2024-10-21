<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    |            "postmark", "log", "array", "failover"
=======
    |            "postmark", "log", "array"
>>>>>>> origin/them_slide
=======
    |            "postmark", "log", "array", "failover"
>>>>>>> Login_Register
=======
    |            "postmark", "log", "array", "failover"
>>>>>>> danhmuc_list
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
<<<<<<< HEAD
            'auth_mode' => null,
=======
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
>>>>>>> danhmuc_list
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
<<<<<<< HEAD
=======
            // 'client' => [
            //     'timeout' => 5,
            // ],
>>>>>>> danhmuc_list
        ],

        'postmark' => [
            'transport' => 'postmark',
<<<<<<< HEAD
=======
            // 'client' => [
            //     'timeout' => 5,
            // ],
>>>>>>> danhmuc_list
        ],

        'sendmail' => [
            'transport' => 'sendmail',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -t -i'),
=======
            'path' => '/usr/sbin/sendmail -bs',
>>>>>>> origin/them_slide
=======
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -t -i'),
>>>>>>> Login_Register
=======
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
>>>>>>> danhmuc_list
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> Login_Register
=======
>>>>>>> danhmuc_list

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/them_slide
=======
>>>>>>> Login_Register
=======
>>>>>>> danhmuc_list
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
