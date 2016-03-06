<?php

namespace backend\controllers;

use backend\controllers\ProductsController;

/**
 * ConsumerProductsController implements the CRUD actions for ConsumerProduct model.
 */
class ConsumerProductsController extends ProductsController
{
    public $model = '\common\models\custom\ConsumerProduct';
    public $searchModel = '\common\models\custom\search\ConsumerProduct';

}
