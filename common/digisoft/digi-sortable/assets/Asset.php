<?php

namespace digi\sortable\assets;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@digi/sortable/assets/files';

    public $js = [
        //'//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js',
        'js/sortable-widgets.js',
    ];

    public $css = [
        'css/sortable-widgets.css',
    ];

    public $depends = ['yii\web\JqueryAsset'];
}
