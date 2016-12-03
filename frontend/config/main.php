<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'class' => '\yii\web\Request',
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.ccp.co.ua',
                'username' => 'info@ccp.co.ua', // або 'info'
                'password' => 'adidas88',
                'port' => '587', // або '25'
            ],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                'GET ' => 'site/index',
                'GET contact' => 'site/contact',
                'GET services' => 'site/services',
                'GET POST reviews' => 'site/reviews',
                'GET prices' => 'site/prices',
                'POST appointment' => 'site/appointment',
                'GET infection' => 'site/infection',
                'GET polips' => 'site/polips',
                'GET infertility' => 'site/infertility',
                'GET inflammatory' => 'site/inflammatory',
                'GET dysplasia' => 'site/dysplasia',

            ]
        ]
    ],
    'params' => $params,
];
