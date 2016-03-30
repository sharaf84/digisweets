<?php

use yii\helpers\Html;
use yii\helpers\Url;

$isHome = Yii::$app->controller->action->id == 'home';
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="<?php echo Yii::$app->language == 'ar' ? 'rtl' : 'ltr'; ?>" lang="<?php echo Yii::$app->language == 'ar' ? 'ar' : 'en'; ?>">
    <head>
        <title>Dream | <?= Yii::t('app', Html::encode($this->title)) ?></title>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="shortcut icon" href="<?//= Url::to('@frontThemeUrl') ?>/themes/101/favicon.ico" />-->
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        
        <?php //include_once 'analyticstracking.php'; ?>
    </head>
    <body class="<?php echo Yii::$app->language == 'ar' ? 'rtl' : 'ltr'; ?>">
        <?php $this->beginBody() ?>
            <!-- BEGIN ASIDE -->
            <?php// include_once 'aside.php'; ?>
            <!-- END ASIDE -->
            <div id="page-wrap">
                <!-- BEGIN HEADER -->
                <?php include_once 'flashMsg.php'; ?>
                <!-- END HEADER -->
                <!-- BEGIN HEADER -->
                <?php include_once 'header.php'; ?>
                <!-- END HEADER -->
                <!-- BEGIN CONTAINER -->
                <?php echo $content; ?>
                <!-- END CONTAINER -->
                <!-- BEGIN FOOTER -->
                <?php include_once 'footer.php'; ?>
                <!-- END FOOTER -->
            </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
