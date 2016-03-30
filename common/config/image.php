<?php

/**
 * Image config file
 * controlles all image sizes and manipulations using yii\imagine\Image class
 * @author Ahmed Sharaf <sharaf.developer@gmail.com>
 */

/*ex:
 * 'sizes' => [
        'box' => ['thumbnail', 100, 200],
        'bestFit' => ['bestFit', 100, 200],
        'fitWidth' => ['fitWidth', 100],
        'fitHeight' => ['fitHeight', 200],
    ]
 */


return [
    'placeholders' => [
        'default' => ['path' => Yii::getAlias('@sharedUrl') . '/images/placeholders/', 'filename' => 'placeholder.png'],
        'person' => ['path' =>  Yii::getAlias('@sharedUrl') . '/images/placeholders/', 'filename' => 'person-placeholder.png'],
    ],
    'sizes' => [
        'micro' => ['thumbnail', 50, 50],
        'fitImgWidth' => ['fitWidth', 150],
        'article' => ['thumbnail', 266, 254],
        'article-inner' => ['thumbnail', 316, 301],
        'product-inner' => ['thumbnail', 423, 427],
        'categories' => ['thumbnail', 316, 427],
        'inspiration-inner' => ['thumbnail', 847.5, 606],
    ]
];
