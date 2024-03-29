<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@images'   => 'img',
        '@videos'   => 'video',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1PBDZk-8emXvaDmKxWAhYItRfMjDpcvZ',
            'parsers' => [
                'application/json' => 'yii/web/JsonParser',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                // SiteController
                '/' => 'site/index',
                '/about' => 'site/about',
                '/payment' => 'site/payment',
                '/contacts' => 'site/contacts',
                '/policy' => 'site/policy',
                '/cart' => 'site/cart',

                // AdminController
                '/admin' => 'admin/index',
                '/login' => 'admin/login',
                '/logout' => 'admin/logout',

                // CategoryController
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'category',
                    'only' => ['index']
                ],
                // SubcategoryController
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'subcategory',
                    'only' => ['index']
                ],
                // OrderController
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'order',
                    'only' => ['index', 'create']
                ],
                // ProductController
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'product',
                    'only' => ['index', 'create']
                ],
            ],
        ],
    ],
    'params' => $params,
    'name' => 'Шашландия',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
