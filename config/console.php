<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
    'controllerMap' => [
        'image-optimize' => [
            'class'           => ImageOptimizeController::class,
            'log'             => YII_DEBUG,
            'imageExtensions' => [
                ImageOptimizerService::IMAGE_PNG, ImageOptimizerService::IMAGE_JPG, ImageOptimizerService::IMAGE_JPEG,
            ],
            'folders'         => [ // Add your folders for images optimize
                '@webroot/web/images'/*,
                '@webroot/web/images' => [ // with options
                    'execlude' => [ // Exclude subfolders or files
                        '@webroot/web/uploads/test/subfolder',
                        '@webroot/web/uploads/test/file.png', // Filename WITH PATH
                    ]
                ],*/
            ],
        ],
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
