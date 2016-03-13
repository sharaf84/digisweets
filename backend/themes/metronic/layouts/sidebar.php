<?php

use yii\helpers\Url;
?>
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu page-sidebar-menu-closed" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>

            <li class="start <?= (in_array(Yii::$app->controller->id, ['consumer-products', 'service-products', 'categories']) ) ? 'active open' : '' ?>">
                <a href="javascript:;">
                    <i class="fa fa-database"></i>
                    <span class="title">Products</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

                <ul class="sub-menu">
                    <li class="<?= (Yii::$app->controller->id == 'consumer-products') ? 'active' : '' ?> <?= Yii::$app->user->can('Consumer') ? '' : 'style="display:none"}' ?> ">
                        <a href="<?= Url::to(['/consumer-products']) ?>"> Consumer Products </a>
                    </li>
                    <li class="<?= (Yii::$app->controller->id == 'service-products') ? 'active' : '' ?> <?= Yii::$app->user->can('Service') ? '' : 'style="display:none"' ?> ">
                        <a href="<?= Url::to(['/service-products']) ?>"> Service Products </a>
                    </li>
                    <li class="<?= (Yii::$app->controller->id == 'categories') ? 'active' : '' ?> <?= Yii::$app->user->can('Asterisk') ? '' : 'style="display:none"' ?> ">
                        <a href="<?= Url::to(['/categories']) ?>"> Categories </a>
                    </li>
                </ul>
            </li>
            
            <li class="start <?= (in_array(Yii::$app->controller->id, ['consumer-inspirations', 'service-inspirations']) ) ? 'active open' : '' ?>">
                <a href="javascript:;">
                    <i class="fa fa-database"></i>
                    <span class="title">Inspirations</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

                <ul class="sub-menu">
                    <li class="<?= (Yii::$app->controller->id == 'consumer-inspirations') ? 'active' : '' ?> <?= Yii::$app->user->can('Consumer') ? '' : 'style="display:none"}' ?> ">
                        <a href="<?= Url::to(['/consumer-inspirations']) ?>"> Consumer Inspirations </a>
                    </li>
                    <li class="<?= (Yii::$app->controller->id == 'service-inspirations') ? 'active' : '' ?> <?= Yii::$app->user->can('Service') ? '' : 'style="display:none"' ?> ">
                        <a href="<?= Url::to(['/service-inspirations']) ?>"> Service Inspirations </a>
                    </li>
                </ul>
            </li>
            
            <li class="start <?= (in_array(Yii::$app->controller->id, ['consumer-articles', 'service-articles']) ) ? 'active open' : '' ?>">
                <a href="javascript:;">
                    <i class="fa fa-database"></i>
                    <span class="title">Articles</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

                <ul class="sub-menu">
                    <li class="<?= (Yii::$app->controller->id == 'consumer-articles') ? 'active' : '' ?> <?= Yii::$app->user->can('Consumer') ? '' : 'style="display:none"}' ?> ">
                        <a href="<?= Url::to(['/consumer-articles']) ?>"> Consumer Articles </a>
                    </li>
                    <li class="<?= (Yii::$app->controller->id == 'service-products') ? 'active' : '' ?> <?= Yii::$app->user->can('Service') ? '' : 'style="display:none"' ?> ">
                        <a href="<?= Url::to(['/service-articles']) ?>"> Service Articles </a>
                    </li>
                </ul>
            </li>
            
            <li class="<?= (Yii::$app->controller->id == 'users') ? 'active' : '' ?> <?= Yii::$app->user->can('Asterisk') ? '' : 'style="display:none"' ?> ">
                <a href="<?= Url::to(['/users']) ?>">
                    <i class="fa fa-user"></i>
                    <span class="title">Users</span> 
                </a>
            </li>
            
            <li class="last <?= (Yii::$app->controller->id == 'orders') ? 'active' : '' ?> <?= Yii::$app->user->can('Asterisk') ? '' : 'style="display:none"' ?> ">
                <a href="<?= Url::to(['/orders']) ?>">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">Orders</span> 
                </a>
            </li>
            
            <li class="start <?= (in_array(Yii::$app->controller->id, ['consumer-products', 'service-products', 'categories']) ) ? 'active open' : '' ?>  <?= Yii::$app->user->can('Asterisk') ? '' : 'style="display:none"' ?> ">
                <a href="javascript:;">
                    <i class="fa fa-database"></i>
                    <span class="title">Contents</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

                <ul class="sub-menu">
                    <li class="<?= (Yii::$app->controller->id == 'pages') ? 'active' : '' ?> <?= Yii::$app->user->can('Consumer') ? '' : 'style="display:none"}' ?> ">
                        <a href="<?= Url::to(['/pages']) ?>"> Pages </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>