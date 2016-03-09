<?php

use yii\helpers\Url;

const ADMIN = 0;
const CONSUMER = 1;
const FOOD_SERVICCE =2;
$test = 0;
?>
<!-- BEGIN HORIZANTAL MENU -->
<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
<div class="hor-menu hidden-sm hidden-xs">
    <ul class="nav navbar-nav">
        <li>
            <a href="<?= Url::to(['/categories']) ?>"> Categories </a>
        </li>

            <li <?= Yii::$app->user->can('Consumer') ? '' : 'style="display:none"}' ?> >
                <a href="<?= Url::to(['/consumer-products']) ?>"> Consumer Products </a>
            </li>
            <li <?= ($test == 1 || $test == 0) ? '' : 'style="display:none"}' ?> >
                <a href="<?= Url::to(['/consumer-inspirations']) ?>"> Consumer Inspirations </a>
            </li>
            <li <?= ($test == 1 || $test == 0) ? '' : 'style="display:none"' ?> >
                <a href="<?= Url::to(['/consumer-articles']) ?>"> Consumer Articles </a>
            </li>
            
            <li <?= ($test == 2 || $test == 0) ? '' : 'style="display:none"' ?> >
                <a href="<?= Url::to(['/service-products']) ?>"> Service Products </a>
            </li>
            <li <?= ($test == 2 || $test == 0) ? '' : 'style="display:none"' ?> >
                <a href="<?= Url::to(['/service-inspirations']) ?>"> Service Inspirations </a>
            </li>
            <li <?= ($test == 2 || $test == 0) ? '' : 'style="display:none"' ?> >
                <a href="<?= Url::to(['/service-articles']) ?>"> Service Articles </a>
            </li>
        
        <li <?= ($test == 0) ? '' : 'style="display:none"' ?> >
            <a href="<?= Url::to(['/users']) ?>"> Users </a>
        </li>
        <li>
            <a href="<?= Url::to(['/orders']) ?>"> Orders </a>
        </li>
        <li class="classic-menu-dropdown"  <?= ($test == 0) ? '' : 'style="display:none"' ?> >
            <a data-toggle="dropdown" href="javascript:;">
                Contents <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-left">
                <li>
                    <a href="<?= Url::to(['/pages']) ?>"><i class="fa fa-pencil"></i> Pages </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
