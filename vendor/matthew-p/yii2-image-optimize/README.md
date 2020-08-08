Image optimizer Yii2
===========================
Very simple extension for optimize your folders with images or just images

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist matthew-p/yii2-image-optimize "*"
```

or add

```
"matthew-p/yii2-image-optimize": "*"
```

to the require section of your `composer.json` file.

**WARNING!** Before use this extension, please visit [ImageOptimizer](https://github.com/psliwa/image-optimizer#supported-optimizers) and install optimizers from list in accordance with your OS.

Usage
-----

Once the extension is installed, simply use it in your code by:

**FOR CONSOLE APPLICATION**

In console main.php add:
```php
return [
    ...
    'controllerMap' => [
        ...
        'image-optimize' => [
            'class'           => ImageOptimizeController::class,
            'log'             => YII_DEBUG,
            'imageExtensions' => [
                ImageOptimizerService::IMAGE_PNG, ImageOptimizerService::IMAGE_JPG, ImageOptimizerService::IMAGE_JPEG,
            ],
            'folders'         => [ // Add your folders for images optimize
                '@frontend/web/uploads/test1',
                '@frontend/web/uploads/test2' => [ // with options
                    'execlude' => [ // Exclude subfolders or files
                        '@frontend/web/uploads/test/subfolder', 
                        '@frontend/web/uploads/test/file.png', // Filename WITH PATH
                    ]
                ],
            ],
        ],
        ...
    ]
    ...
];
```

And run in console:
```bash
php yii image-optimize
```

**JUST USING THE EXTENSION**

```php
$optimizeService = new ImageOptimizerService();
// For folder
$optimizeService->optimizeFolder('@frontend/web/uploads/test1');
// For image
$optimizeService->optimizeFolder('@frontend/web/uploads/test1/image.png');
```