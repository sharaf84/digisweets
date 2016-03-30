<?php

namespace frontend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use common\models\custom\Product;
use common\models\custom\ConsumerProduct;
use common\models\custom\ServiceProduct;

/**
 * Products controller
 */
class ProductsController extends \frontend\components\BaseController {
  const FOOD = 2;
  const CONSUMER = 1;
  const NEWP = 1;
    /**
     * List all Products
     * @param string $slug
     */
    public function actionIndex($category_id, $category_name){
       $oProducts = Product::find()->andWhere(['category_id' => $category_id])->with('firstMedia')->all();
        return $this->render('index', ['oProducts' => $oProducts, 'category_id' => $category_id, 'category_name' => $category_name]);
    }
    
    public function actionView($slug){
        
        if((Yii::$app->session->get('target')) == 'food-service'){
            $oServiceProduct = ServiceProduct::find()->Where(['slug' => $slug])->with(['firstMedia', 'reciepe'])->one();
            return $this->render('food-service/view', ['oProduct' => $oServiceProduct]);
        }else{
            $oConsumerProduct = ConsumerProduct::find()->Where(['slug' => $slug])->with('firstMedia')->one();
            return $this->render('consumer/view', ['oProduct' => $oConsumerProduct]);
        }
    }
    
    /**
     * List all New Products
     */
    public function actionNew(){
        $oNewProducts = ServiceProduct::find()->where(['new' => self::NEWP])->all();
        
    }

}
