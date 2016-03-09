<?php
define('CURRENCY_SYMBOL', 'EGP');
Yii::setAlias('root', dirname(dirname(__DIR__)) . '/');
Yii::setAlias('sharedPath', dirname(dirname(__DIR__)) . '/shared');
Yii::setAlias('sharedUrl', '/shared');

return [
    'name' => 'Dreem',
    'language' => 'en',
    'timezone' => 'Africa/Cairo',
    'aliases' => [
        '@digi' => '@common/digisoft/digi',
        '@digi/metronic' => '@common/digisoft/digi-metronic',
        '@digi/fancybox' => '@common/digisoft/digi-fancybox',
        '@digi/sortable' => '@common/digisoft/digi-sortable',
        '@digi/metaTags' => '@common/digisoft/digi-meta-tags',
        '@uploadPath' => '@sharedPath/uploads',
        '@uploadUrl' => '@sharedUrl/uploads',
        '@metronicPath' => '@sharedPath/themes/metronic',
        '@metronicUrl' => '@sharedUrl/themes/metronic',
        '@frontThemePath' => '@sharedPath/themes/frontend',
        '@frontThemeUrl' => '@sharedUrl/themes/frontend',
        '@webvimark/helpers' => '@common/digisoft/webvimark/helpers',
        '@webvimark/behaviors/multilanguage' => '@common/digisoft/webvimark/multilanguage',
        '@hitcounter' => '@common/digisoft/hitcounter/src',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ]
    ],
];
