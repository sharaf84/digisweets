<?php

namespace common\models\custom;

use Yii;

/**
 * This is the model class for table "reciepe".
 *
 * @property string $id
 * @property string $product_id
 * @property string $element
 * @property string $amount
 * @property string $created
 * @property string $updated
 *
 * @property Product $product
 */
class Reciepe extends \common\models\base\Base
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reciepe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'element', 'amount'], 'required'],
            [['product_id'], 'integer'],
            [['element'], 'string', 'max' => 100],
            [['amount'], 'string', 'max' => 10],
            [['created', 'updated'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'element' => Yii::t('app', 'Element'),
            'amount' => Yii::t('app', 'Amount'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
