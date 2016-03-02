<?php

namespace common\models\custom;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $target
 * @property string $code
 * @property string $title
 * @property string $slug
 * @property string $price
 * @property integer $qty
 * @property integer $sold
 * @property string $brief
 * @property string $description
 * @property string $body
 * @property integer $featured
 * @property integer $sort
 * @property integer $status
 * @property string $created
 * @property string $updated
 */
class Product extends \common\models\base\Base
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'target', 'qty', 'sold', 'featured', 'sort', 'status'], 'integer'],
            [['code', 'brief', 'description', 'body'], 'required'],
            [['price'], 'number'],
            [['brief', 'description', 'body'], 'string'],
            [['created', 'updated'], 'safe'],
            [['code'], 'string', 'max' => 32],
            [['title', 'slug'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'target' => Yii::t('app', 'Target'),
            'code' => Yii::t('app', 'Code'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'price' => Yii::t('app', 'Price'),
            'qty' => Yii::t('app', 'Qty'),
            'sold' => Yii::t('app', 'Sold'),
            'brief' => Yii::t('app', 'Brief'),
            'description' => Yii::t('app', 'Description'),
            'body' => Yii::t('app', 'Body'),
            'featured' => Yii::t('app', 'Featured'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
}
