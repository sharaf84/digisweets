<?php

/**
 * Metronic Admin Asset
 * @author Ahmed Sharaf <sharaf.developer@gmail.com>
 * @copyright Copyright (c) 2015 Digitree
 */

namespace frontend\assets;

use yii\web\AssetBundle;

class UIAsset extends AssetBundle {

    //public $sourcePath = '@frontThemePath';
    public $basePath = '@frontThemePath';
    public $baseUrl = '@frontThemeUrl';

    public $css = [
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/style.css',
        
    ];

    public $js = [
        'js/modernizr.custom.js',
        'js/jquery-2.2.2.min.js',
        'js/masonry.pkgd.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/classie.js',
        'js/colorfinder-1.1.js',
        'js/gridScrollFx.js',
        'js/test.js',
        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];


}
