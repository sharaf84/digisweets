<?php

namespace frontend\controllers;

use Yii;
use common\models\custom\ServiceInspiration;
use common\models\custom\ConsumerInspiration;
use yii\web\NotFoundHttpException;

/**
 * Articles controller
 */
class InspirationsController extends \frontend\components\BaseController {

    public function actionIndex() {

        $oServiceInspirations = ServiceInspiration::find()->with('firstMedia')->all();
        return $this->render('index', ['oInspirations' => $oServiceInspirations]);
    }

    public function actionView($id) {
        $oServiceInspiration = ServiceInspiration::find()->andWhere(['id' => $id])->with('firstMedia')->one();
        if(!$oServiceInspiration)
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        return $this->render('view', [
            'oInspiration' => $oServiceInspiration,
        ]);
    }

}
