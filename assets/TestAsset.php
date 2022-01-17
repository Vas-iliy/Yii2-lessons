<?php

namespace app\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
    //public $sourcePath = '@app/components';
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
      'css/styles.css'
    ];

    public $js = [
        //'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',
        'scripts.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}