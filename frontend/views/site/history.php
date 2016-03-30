<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = Yii::t('app', 'History');
?>
<div class="page-content">
    <div class="container">
	<div class="page-depth">
            <ul>
		<li><a href="index.html"><?= Yii::t('app', 'Home') ?></a></li>
		<li><a href="<?= Url::to(['site/page', 'slug' => 'history']) ?>"><?= Yii::t('app', 'History') ?></a></li>
            </ul>
	</div>
        <div class="inner-page">
            <section id="history">
		<div class="row">
                    <div class="col-md-7">
			<div class="row">
                            <div class="col-md-12">
				<h2><?= $oPage->title ?></h2>
				<?= $oPage->body ?>
                            </div>
			</div>
			<div class="row">
                            <?php foreach($oPage->media as $media){ ?>
                                <div class="col-md-6 col-sm-6">
                                    <img src="<?= $media->getImgUrl() ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>	
		</div>
            </section>
            <div class="side-bg-img"><img src="<?= Url::to('@frontThemeUrl') ?>/images/food/about-bg.png"></div>
	</div>
    </div>
</div>