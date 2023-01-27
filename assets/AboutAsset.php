<?php

namespace app\assets;

use yii\web\AssetBundle;

class AboutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/delivery-meat.css',
        'css/intro.css',
        'css/about.css',
        'css/feature.css',
        'css/zone.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}