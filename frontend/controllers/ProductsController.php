<?php

namespace frontend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use common\models\custom\Product;
use common\models\custom\Consumer;
use common\models\custom\ServiceProduct;

/**
 * Products controller
 */
class ProductsController extends \frontend\components\BaseController {
  const FOOD = 2;
  const CONSUMER = 1;
    /**
     * List all Products
     * @param string $slug
     */
    public function actionIndex(){
        if((Yii::$app->session->get('target')) == 'food-service'){
            return $this->redirect('food-service');
        }elseif((Yii::$app->session->get('target')) == 'consumer'){
            return $this->redirect('consumer');
        }
    }
    
    /**
     * List all Food Service Products
     */
    public function actionFoodService($category_id = 10){
        $oProducts = Product::find()->andWhere(['category_id' => $category_id])->with('firstMedia')->all();
        return $this->render('food-service/index', ['oProducts' => $oProducts, 'category_id' => $category_id]);
    }
    
    /**
     * List all Consumer Products
     */
    public function actionConsumer(){
        $oProducts = ConsumerProduct::find()->with('firstMedia')->all();
        return $this->render('consumer/index', ['oProducts' => $oProducts]);
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
     * View Product
     * @param string $slug
     */
    public function actionProductView($slug) {
        $oProduct = Product::find()->parents()->andWhere(['slug' => $slug])->with('firstMedia', 'category', 'childs')->one();
        if (!$oProduct)
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        $oChildProduct = null;
        $flavors = $colors = $colorsOptions = [];
        $oProductForm = new ProductForm();
        if ($oProductForm->load(Yii::$app->request->get()) && $oProductForm->validate()) {

            $oProductQuery = Product::find()
                    ->childs($oProduct->id)
                    ->with('media')
                    ->andWhere(['size_id' => $oProductForm->size]);

            if ($oProductForm->flavor) {
                $oChildProduct = $oProductQuery->andWhere(['flavor_id' => $oProductForm->flavor])->one();
            } elseif ($oProductForm->color) {
                $oChildProduct = $oProductQuery->andWhere(['color' => $oProductForm->color])->one();
            }
            if ($oProduct->isAccessory()) {
                $colors = $oProduct->getChildsColors($oProductForm->size);
                foreach (array_keys($colors) as $color)
                    $colorsOptions[$color] = ['style' => "background:$color; color:$color;"];
            } else {
                $flavors = $oProduct->getChildsFlavors($oProductForm->size);
            }
        }
        return $this->render('product', [
                    'oProduct' => $oProduct,
                    'oChildProduct' => $oChildProduct,
                    'oProductForm' => $oProductForm,
                    'sizes' => $oProduct->getChildsSizes(),
                    'flavors' => $flavors,
                    'colors' => $colors,
                    'colorsOptions' => $colorsOptions,
                    'relatedProducts' => $oProduct->getRelated(4)
        ]);
    }

}
