<?php

/**
 * Image config file
 * controlles all image sizes and manipulations using yii\imagine\Image class
 * @author Ahmed Sharaf <sharaf.developer@gmail.com>
 */
//use Yii;

return [
    'placeholders' => [
        'default' => ['path' => Yii::getAlias('@sharedUrl') . '/images/placeholders/', 'filename' => 'placeholder.png'],
        'person' => ['path' =>  Yii::getAlias('@sharedUrl') . '/images/placeholders/', 'filename' => 'person-placeholder.png'],
    ],
    'sizes' => [
        '25*25' => ['thumbnail', 25, 25],
        'micro' => ['thumbnail', 50, 50],
        'home-slider' => ['thumbnail', 1231, 673],
        'home-banner' => ['thumbnail',  1231, 505],
        'home-product' => ['thumbnail', 207, 395],
        'home-article' => ['thumbnail', 220, 307],
        'list-product' => ['thumbnail', 164, 313],
        'main-product' => ['thumbnail', 251, 496],
        'bottom-product' => ['thumbnail', 164, 313],
        'cart-product' => ['thumbnail', 52, 99],
        'dropdown-product' => ['thumbnail', 69, 131],
        //'background-product' => ['thumbnail', 251, 496],
        'list-article' => ['thumbnail', 142, 140],
        'main-article' => ['thumbnail', 1000, 317],
        'bottom-article' => ['thumbnail', 303, 197],
        'dropdown-article' => ['thumbnail', 193, 125],
        'default_avatar' => ['thumbnail', 100, 100], 
        'profile_avatar' => ['thumbnail', 228, 228], 
    ]
];
