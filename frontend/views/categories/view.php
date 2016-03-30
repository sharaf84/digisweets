<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($oProduct->title);
Yii::$app->metaTags->register($oProduct);

//echo '<pre>'; var_dump($oProduct->reciepe); echo '</pre>'; die;
?>

<div class="page-content">
    <div class="container">
	<div class="page-depth">
            <ul>
		<li><a href="index.html"><?= Html::encode('Home') ?></a></li>
		<li><a href="<?= Url::to(['products/food-service']) ?>"><?= Html::encode('Products') ?></a></li>
		<li><a href="#"><?= Html::encode($oProduct->title) ?></a></li>
            </ul>
	</div>
	<!-- page depth -->
	<div class="inner-page">
            <div class="product">
		<div class="row">
                    <div class="col-md-5">
			<div class="product-img"><img src="<?= $oProduct->getFeaturedImgUrl('product-inner') ?>" alt="<?= $oProduct->title ?>"></div>
                    </div>
                    <div class="col-md-7">
			<div class="product-info">
                            <div class="product-title">
				<p class="product-title-l"><?= Html::encode($oProduct->title) ?></p>
				<p class="product-title-s"><?= Html::encode($oProduct->title) ?></p>
                            </div>
                            <div class="product-adv">
				<h4>Advantages</h4>
				<?= $oProduct->advantages ?>
                            </div>
                            <div class="product-recipe">
				<h4>Recipe Suggestion</h4>
				<p>To make <?= $oProduct->title ?></p>
				<table>
                                    
                                    <?php
                                        foreach($oProduct->reciepe as $reciepe){
                                    ?>
                                    <tr>
					<th align="right"><?= $reciepe->element ?></th>
					<td align="left"><?= $reciepe->amount ?></td>
                                    </tr>
                                        <?php } ?>
                                    
				</table>
                            </div>
                            <div class="product-direction">
				<h4>Directions</h4>
                                <?= $oProduct->directions ?>
                            </div>
                            <div class="addToCart">
				<i></i><p>Add To Cart</p>
                            </div>
			</div>
                    </div>
		</div>
            </div>
            <div class="side-bg-img"><img src="<?= Url::to('@frontThemeUrl') ?>/images/food/product-bg.png"></div>
	</div>
	<!-- inner page -->
    </div>
</div>