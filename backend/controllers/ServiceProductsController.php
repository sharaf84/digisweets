<?php

namespace backend\controllers;

use backend\controllers\ProductsController;

/**
 * ConsumerProductsController implements the CRUD actions for ConsumerProduct model.
 */
class ServiceProductsController extends ProductsController
{
    public $model = '\common\models\custom\ServiceProduct';
    public $searchModel = '\common\models\custom\search\ServiceProduct';
}
