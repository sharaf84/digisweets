<?php

namespace frontend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use common\models\custom\Category;
use common\models\custom\ServiceProduct;
use common\models\custom\ConsumerProduct;

/**
 * Products controller
 */
class CategoriesController extends \frontend\components\BaseController {
  const FOOD = 2;
  const CONSUMER = 1;
    /**
     * List all Categories
     */
    public function actionIndex(){
        $oCategories = Category::find()->andWhere(['lvl' => 1])->all();
        return $this->render('index', ['oCategories' => $oCategories]);
    }
    
    public function actionView($id){
        
        if((Yii::$app->session->get('target')) == 'food-service'){
            $oServiceCategoryProducts = ServiceProduct::find()->Where(['category_id' => $id])->with('firstMedia')->all();
            return $this->render('/products/food-service/index', ['oCategoryProducts' => $oServiceCategoryProducts]);
        }else{
            $oConsumerCategoryProducts = ConsumerProduct::find()->Where(['category_id' => $id])->with('firstMedia')->all();
            return $this->render('/products/consumer/index', ['oCategoryProducts' => $oConsumerCategoryProducts]);
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
