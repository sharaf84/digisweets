<?php

use yii\widgets\Pjax;
use yii\helpers\Inflector;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Store');
?>
<div id="checkpoint-a" class="single-page archive-page row">
    <div class="page-title large-12 medium-12 small-12 columns">
        <h2>
            <?php
            if ($slug) {
                echo Html::encode(Inflector::camel2words($slug));
            } elseif ($oSearchForm->key) {
                echo Yii::t('app', 'Search results of: {key}', ['key' => Html::encode($oSearchForm->key)]);
            }else
                echo Yii::t('app', 'Store');
            ?>
        </h2>
    </div>
<?php Pjax::begin(['id' => 'pjaxStore']); ?>

        <?php echo $this->render('_searchForm', ['oSearchForm' => $oSearchForm, 'slug' => $slug,]); ?>

    <div class="products-list">
        <?=
        \yii\widgets\ListView::widget([
            'dataProvider' => $oProductsDP,
            'itemOptions' => ['class' => 'single-product-item row'],
            'itemView' => '_productItem',
            'layout' => "{items}\n{pager}",
            //'summary' => false,
            'sorter' => [
                'attributes' => ['price']
            ],
            'pager' => [
                'options' => ['class' => 'pagination normalize'],
                'activePageCssClass' => 'current',
                'prevPageLabel' => '<i class="md md-chevron-left"></i>' . Yii::t('app', 'Back'),
                'nextPageLabel' => Yii::t('app', 'Next') . '<i class="md md-chevron-right"></i>',
            ]
        ])
        ?>
    </div>
<?php Pjax::end(); ?>

<?php if ($bestSellerProducts) { ?>
        <div class="page-title large-12 medium-12 small-12 columns">
            <h2><?= Yii::t('app', 'Best Seller') ?></h2>
        </div>

    <?= $this->render('_bottomProducts', ['products' => $bestSellerProducts]) ?>
<?php } ?>
</div>
