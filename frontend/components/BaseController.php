<?php

namespace frontend\components;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use frontend\assets\AppAsset;

/**
 * Base controller
 */
class BaseController extends Controller {

    public function init() {
        parent::init();
        //\webvimark\behaviors\multilanguage\MultiLanguageHelper::catchLanguage();
        $this->setLanguage();
        $this->setTarget();
        $this->regiterAssets();
    }

    protected function regiterAssets() {
        AppAsset::register($this->view);
    }

    protected function setLanguage() {
        //Yii::$app->language = 'ar';
        Yii::$app->language = (isset(Yii::$app->params['mlConfig']['subdomains']['ar']) && Url::base(true) == Yii::$app->params['mlConfig']['subdomains']['ar']) ? 'ar' : 'en';
    }

    protected function setTarget() {
        Yii::$app->session->set('target', !empty(Yii::$app->request->queryParams['target']) ? (Yii::$app->request->queryParams['target'] == 'consumer' ? \common\models\custom\ConsumerProduct::TARGET : \common\models\custom\ServiceProduct::TARGET) : null);
    }

}
