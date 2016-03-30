<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($oArticle->title);
Yii::$app->metaTags->register($oArticle);
?>

<div class="page-content">
    <div class="container">
        <div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="<?= Url::to(['articles/index']) ?>">News & Updates</a></li>
		<li><a href="#"><?= $oArticle->title ?></a></li>
            </ul>
        </div>
        <!-- page depth -->
        <div class="inner-page">
            <div class="news">
		<div class="row">
                    <div class="col-md-5">
			<div class="news-img"><img src="<?= $oArticle->getFeaturedImgUrl('article-inner') ?>"></div>
                    </div>
                    <div class="col-md-7">
			<div class="news-info">
                            <div class="news-title"><?= $oArticle->title ?></div>
                            <div class="news-desc">
				<?= $oArticle->body ?>
                            </div>
			</div>
                    </div>
		</div>
            </div>
	</div>
	<!-- inner page -->
    </div>
</div>
<!-- page content -->
