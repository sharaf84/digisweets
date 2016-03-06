<?php

use yii\helpers\Html;
use digi\metronic\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\custom\Product */
/* @var $form digi\metronic\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<div class="form-body">
    <h3 class="form-section">Note:  <small>fields marked with asterisk (*) are required.</small></h3>

        <?= $form->field($model, 'category_id')->dropDownList(common\models\custom\Category::getList(), ['prompt' => 'Please Select']) ?>

    <?= $form->field($model, 'target')->hiddenInput(['value' => $model::TARGET])->label(false); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= !$model->isNewRecord ? $form->field($model, 'slug')->textInput() : '' ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <div class="parentFields">
        <?= $form->field($model, 'brief')->textarea(['rows' => 6])->widget(\webvimark\behaviors\multilanguage\input_widget\MultiLanguageActiveField::className(), ['inputType' => 'textArea']) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6])->widget(\webvimark\behaviors\multilanguage\input_widget\MultiLanguageActiveField::className(), ['inputType' => 'textArea']) ?>

        <?=
                $form->field($model, 'body')
                ->widget(\dosamigos\ckeditor\CKEditor::className(), [
                    'options' => ['rows' => 6],
                    'preset' => 'standerd' //full,standerd,basic
                ])
                ->widget(\webvimark\behaviors\multilanguage\input_widget\MultiLanguageActiveField::className(), ['inputType' => 'textArea'])
        ?>
    </div>
<!--
    <= $form->field($model, 'featured')->checkbox() ?>

    <= $form->field($model, 'sort')->textInput() ?>

    <= $form->field($model, 'status')->textInput() ?>

    <= $form->field($model, 'created')->textInput() ?>

    <= $form->field($model, 'updated')->textInput() ?>
    -->
    <div class="parentFields">
        <h3 class="form-section">SEO:  <small>Meta Tags</small></h3>

        <?=
        digi\metaTags\MetaTags::widget([
            'model' => $model,
            'form' => $form,
            'multiLanguage' => true,
        ])
        ?>
    </div>


</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => 'btn green']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn default']) ?>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
