<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = Yii::t('app', 'Food Service Products');
?>

<div class="page-content">
    <div class="container">
        <div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
                <li><a href="<?= Url::to(['categories/index']) ?>">Categories</a></li>
		<li><a href="<?= Url::to(['products/food-service', 'category_id' => $oProducts[0]->category->id]) ?>"><?= $oProducts[0]->category->name ?></a></li>
            </ul>
	</div>
	<!-- page depth -->
	<div class="inner-page">
            <div class="grid-wrap">
		<ul class="grid swipe-down" id="grid">
                    <?php
                        foreach($oProducts as $oProduct){ ?>
                            <li><a href="<?= Url::to(['products/view', 'slug' => $oProduct->slug]); ?>"><img src="<?= $oProduct->getFeaturedImgUrl() ?>" alt="<?= Html::encode($oProduct->title) ?>"><h3><?= Html::encode($oProduct->title) ?></h3></a></li>
                    <?php    }
                    ?>
		</ul>
            </div>
	</div>
	<!-- inner page -->
    </div>
</div>