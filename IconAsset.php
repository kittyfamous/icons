<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class IconAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fortawesome/font-awesome';
    public $css = [
        'css/font-awesome.css',
    ];
}