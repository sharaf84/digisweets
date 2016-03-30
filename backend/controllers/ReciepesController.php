<?php

namespace backend\controllers;

use Yii;
use common\models\custom\Reciepe;
use common\models\custom\search\Reciepe as ReciepeSearch;
use backend\components\BaseController;
use yii\web\NotFoundHttpException;

/**
 * ReciepesController implements the CRUD actions for Reciepe model.
 */
class ReciepesController extends BaseController
{
    public function init() {
        parent::init();
        /**
         * Don't render layout because it will be rendered at iframe
         */
        isset(Yii::$app->request->queryParams['iframe']) and Yii::$app->session['iframe'] = true;
        isset(Yii::$app->request->queryParams['clear']) and Yii::$app->session['Media'] = Yii::$app->session['iframe'] = null;
        Yii::$app->session['iframe'] and $this->layout = 'iframe';
    }
    
    /**
     * Lists all Reciepe models.
     * @return mixed
     */
    public function actionIndex($product_id)
    {
        $searchModel = new ReciepeSearch(['product_id' => $product_id]);
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'product_id' => $product_id,
        ]);
    }

    /**
     * Displays a single Reciepe model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Reciepe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($product_id)
    {
        $model = new Reciepe();
        $model->product_id = $product_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Reciepe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Reciepe model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        if (Yii::$app->request->isAjax) {
            $this->actionIndex();
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Reciepe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Reciepe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reciepe::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
