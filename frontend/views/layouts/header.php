<?php

/**
 * @todo Enhancements
 */
use yii\helpers\Url;

$isHome = Yii::$app->controller->action->id == 'home';
?>
<?php Yii::$app->session->set('target', 'food-service'); ?>
<header>
    <div class="container">
	<div class="inner-header">
            <div class="logo"><img src="<?= Url::to('@frontThemeUrl') ?>/images/food/logo.png"></div>
                <nav class="nav-menu">
                    <ul class="menu-list">
                            <li><a href="#">Home</a></li>
                            <li class="sub-menu">
				<a href="#" class="<?= ((Yii::$app->request->url == '/history') || (Yii::$app->request->url == '/quality-and-safety') || (Yii::$app->request->url == '/export')) ? 'active' : ''?>">About</a>
				<ul>
                                    <li><a href="<?= Url::to(['site/page', 'slug' => 'history']) ?>" class="<?= (Yii::$app->request->url == '/history') ? 'active' : ''?>">History</a></li>
                                    <li><a href="<?= Url::to(['site/page', 'slug' => 'quality-and-safety']) ?>" class="<?= (Yii::$app->request->url == '/quality-and-safety') ? 'active' : ''?>">Quality And Safety</a></li>
                                    <li><a href="<?= Url::to(['site/page', 'slug' => 'export']) ?>" class="<?= (Yii::$app->request->url == '/export') ? 'active' : ''?>">Export</a></li>
				</ul>
                            </li>
                            <li><a href="<?= ((Yii::$app->session->get('target')) == 'food-service') ? Url::to(['categories/index']) : Url::to(['products/consumer']) ?>">Products</a></li>
                            <li><a href="<?= Url::to(['inspirations/index']) ?>">Inspirations</a></li>
                            <li><a href="<?= Url::to(['articles/index']) ?>">News & Updates</a></li>
                            <li><a href="#">Contact Us</a></li>
                    </ul>
		</nav>
		<div class="header-controls clearfix">
                    <div class="shopping-cart active"><a href="cart.htm"><i class="shopping-count"><span>2</span></i></a></div>
                    <div class="lang"><span>Ar</span></div>
		</div>
            <div class="mobile-menu"><i></i></div>	
        </div>
    </div>
</header>