<?php

namespace frontend\controllers;

use Yii;
use common\models\custom\ServiceArticle;
use yii\web\NotFoundHttpException;

/**
 * Articles controller
 */
class ArticlesController extends \frontend\components\BaseController {

    public function actionIndex() {

        $oServiceArticles = ServiceArticle::find()->with('firstMedia')->all();
        return $this->render('index', ['oArticles' => $oServiceArticles]);
    }

    public function actionView($slug) {
        $oServiceArticle = ServiceArticle::find()->andWhere(['slug' => $slug])->with('firstMedia')->one();
        if(!$oServiceArticle)
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        return $this->render('view', [
            'oArticle' => $oServiceArticle,
        ]);
    }

}
