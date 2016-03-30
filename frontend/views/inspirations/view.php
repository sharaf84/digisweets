<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($oInspiration->title);
Yii::$app->metaTags->register($oInspiration);
?>
<div class="page-content">
    <div class="container">
	<div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="<?= Url::to(['inspirations/index']) ?>">Inspirations</a></li>
		<li><a href="#"><?= $oInspiration->title ?></a></li>
            </ul>
	</div>
	<!-- page depth -->
	<div class="inner-page">
            <div class="inspiration">
		<div class="row">
                    <div class="col-md-9">
			<div class="inspiration-title">
                            <h1><?= $oInspiration->title ?></h1>
			</div>
			<div class="inspiration-desc">
                            <?= $oInspiration->body ?>
			</div>
			<div class="inspiration-img"><img src="<?= $oInspiration->getFeaturedImgUrl('inspiration-inner') ?>"></div>
                    </div>
		</div>
            </div>
            <div class="side-bg-img"><img src="<?= Url::to('@frontThemeUrl') ?>/images/food/product-bg.png"></div>
	</div>
	<!-- inner page -->
    </div>
</div>
<!-- page content -->