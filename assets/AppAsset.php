<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/style.css',
        'icons/fontawesome/css/fontawesome-all.min.css',
        'icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css'
    ];
    public $js = [
        'js/libs/jquery-3.3.1.min.js',
        'js/libs/popper.min.js',
        'js/libs/bootstrap.min.js',
        'js/navigation.js',
        'js/jquery.flexslider-min.js',
        'js/script.js'
    ];
    public $depends = [/*
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'*/
    ];
}
