<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($oProduct->title);
Yii::$app->metaTags->register($oProduct);
?>

<div class="page-content">
    <div class="container">
	<div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="newsF.htm">Products</a></li>
		<li><a href="services.html">Sponge Cake Mix (Chocolate)</a></li>
            </ul>
	</div>
	<!-- page depth -->
	<div class="inner-page">
            <div class="product">
		<div class="row">
                    <div class="col-md-5">
			<div class="product-img"><img src="images/food/new-inner1.jpg"></div>
                    </div>
                    <div class="col-md-7">
			<div class="product-info">
                            <div class="product-title">
				<p class="product-title-l">Sponge Cake Mix (Chocolate)</p>
				<p class="product-title-s">Sponge Cake Mix (Chocolate)</p>
                            </div>
                            <div class="product-adv">
				<h4>Advantages</h4>
				<P>Just add eggs and water saves in the amountof eggs used maintainhs the spongy consistency for long period</P>
                            </div>
                            <div class="product-recipe">
				<h4>Recipe Suggestion</h4>
				<p>To make sponge cake</p>
				<table>
                                    <tr>
					<th align="right">Eggs</th>
					<td align="left">120g</td>
                                    </tr>
                                    <tr>
					<th align="right">Flour</th>
					<td align="left">50g</td>
                                    </tr>
                                    <tr>
					<th align="right">Sugar</th>
					<td align="left">40g</td>
                                    </tr>
                                    <tr>
					<th align="right">Improver</th>
					<td align="left">340g</td>
                                    </tr>
                                    <tr>
					<th align="right">Baking powder</th>
					<td align="left">400g</td>
                                    </tr>
                                    <tr>
					<th align="right">Vanilla</th>
					<td align="left">1g</td>
                                    </tr>
                                    <tr>
					<th align="right">Water</th>
					<td align="left">100g</td>
                                    </tr>
				</table>
                            </div>
                            <div class="product-direction">
				<h4>Directions</h4>
				<p>Just add eggs and water saves in the amountof eggs used maintainhs the spongy consistency for long period</p>
                            </div>
                            <div class="addToCart">
				<i></i><p>Add To Cart</p>
                            </div>
			</div>
                    </div>
		</div>
            </div>
            <div class="side-bg-img"><img src="images/food/product-bg.png"></div>
	</div>
	<!-- inner page -->
    </div>
</div>