<?php

use yii\helpers\Html;
use digi\metronic\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\custom\Product */

$this->title = ucfirst($this->context->id);
$this->params['breadcrumbs'][] = ['label' => ucfirst($this->context->id), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-content product-view">

    <!-- BEGIN STYLE CUSTOMIZER -->
    <?=  $this->render('@metronicTheme/layouts/themePanel.php'); ?>
    <!-- END STYLE CUSTOMIZER -->
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
        <?= Html::encode($this->title) ?>
    </h3>
    <div class="page-bar">
        <?=         \digi\metronic\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    Actions <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => '']) ?>
                    </li>
                    <li>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                //'method' => 'post',
                            ],
                        ]) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!--Yii Table-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i><?= ucfirst($this->context->id) ?> Details
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
                <div class="portlet-body">
                        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'category.name:text:Category',
            [
                'attribute' => 'target',
                'filter' => [1 => 'Consumer', 2 => 'Food Service'],
                'format' => 'html',
                'value' => ($model->target == 1) ? '<span class="badge badge-success"> Consumer </span>' : '<span class="badge badge-danger"> Food Service </span>',
            ],
            'code',
            'price',
            'qty',
            'sold',
            'brief:ntext',
            'description:ntext',
            'body:ntext',
            [
                'attribute' => 'featured',
                'filter' => [0 => 'No', 1 => 'Yes'],
                'format' => 'html',
                'value' => $model->featured ? '<span class="badge badge-success"> Yes </span>' : '<span class="badge badge-danger"> No </span>',
            ],
            'sort',
            //'status',
            'created',
            'updated',
        ],
    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>

