<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'News & Updates');
?>
<div class="page-content">
    <div class="container">
	<div class="page-depth">
            <ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="services.html">News & Updates</a></li>
            </ul>
	</div>
	<!-- page depth -->
        <div class="inner-page">
            <div class="news-list">
            <?php foreach($oArticles as $article){
            ?>
                <div class="news-list-item clearfix">
                    <div class="news-list-img"><img src="<?= $article->getFeaturedImgUrl('article') ?>"></div>
                    <div class="news-list-info">
                        <div class="news-list-title"><?= $article->title ?></div>
                        <div class="news-list-desc">
                            <span><?= $article->brief ?></span>
                        </div>
                        <div class="news-list-more"><a href="<?= Url::to(['food-service/articles/view', 'slug' => $article->slug]) ?>">Read More <i class="glyphicon glyphicon-chevron-right"></i></a></div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>    
	<!-- inner page -->
    </div>
</div>
<!-- page content -->