<?php

namespace app\assets;

use yii\web\AssetBundle;

class CartAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/cart.css',
        'css/main-container.css',
        'css/cart_product.css',
        'css/cart_user-info.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}