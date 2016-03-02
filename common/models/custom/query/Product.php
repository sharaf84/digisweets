<?php

namespace common\models\custom\query;

class Product extends \yii\db\ActiveQuery {

    /**
     * Checks the product in stock.
     * @param int $qty
     * @return \yii\db\ActiveQuery the owner
     */
    public function inStock($qty = 1) {
        return $this->andWhere(['>=', 'qty', $qty]);
    }
    
    /**
     * Checks the product is valid to cart.
     * @param int $qty
     * @return \yii\db\ActiveQuery the owner
     */
    public function validToCart($qty = 1) {
        return $this->inStock($qty);
    }
    
    
    public function defaultOrder() {
        return $this->addOrderBy(['sort' => SORT_ASC, 'id' => SORT_DESC]);
    }

}
