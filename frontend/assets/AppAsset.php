<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;
use yii\widgets\MaskedInputAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/site.js',
//        '@bower/jquery.inputmask/dist/jquery.inputmask.bundle.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
//        MaskedInputAsset::class
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}
