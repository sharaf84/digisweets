<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'Inspirations');
?>
<div class="page-content">
    <div class="container">
	<div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="<?= Url::to(['inspirations/index']) ?>">Inspirations</a></li>
            </ul>
	</div>
	<!-- page depth -->
        <div class="inner-page">
            <div class="grid-wrap">
		<ul class="grid swipe-down" id="grid">
                    <?php
                        foreach($oInspirations as $inspiration){
                    ?>
                            <li><a href="<?= Url::to(['inspirations/view', 'id' => $inspiration->id]) ?>"><img src="<?= $inspiration->getFeaturedImgUrl() ?>" alt="<?= $inspiration->title ?>"><h3><?= $inspiration->title ?></h3><div class="inspiration-des"><p><?= $inspiration->brief ?></p></div></a></li>
                    <?php } ?>
		</ul>
            </div>
        </div>    
	<!-- inner page -->
    </div>
</div>
<!-- page content -->