<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = Yii::t('app', 'Categories');
?>

<div class="page-content">
    <div class="container">
        <div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="<?= Url::to(['categories/index']) ?>">Categories</a></li>
            </ul>
	</div>
	<!-- page depth -->
	<div class="inner-page">
            <div class="grid-wrap">
		<ul class="grid swipe-down" id="grid">
                    <?php
                        foreach($oCategories as $oCategory){ ?>
                            <li><a href="<?= Url::to(['products/food-service', 'category_id' => $oCategory->id]); ?>"><img src="<?= $oCategory->getFeaturedImgUrl('categories') ?>" alt="<?= Html::encode($oCategory->name) ?>"><h3><?= Html::encode($oCategory->name) ?></h3></a></li>
                    <?php    }
                    ?>
		</ul>
            </div>
	</div>
	<!-- inner page -->
    </div>
</div>