<?php

namespace common\models\custom;

use Yii;
use common\models\custom\Reciepe;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $target
 * @property string $code
 * @property string $title
 * @property string $slug
 * @property string $advantages
 * @property string $directions
 * @property integer $new
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
    const TARGET = 0;
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
            [['target'], 'default', 'value' => static::TARGET],
            [['code', 'target', 'category_id', 'qty', 'price', 'title'], 'required'],
            [['category_id', 'target', 'qty', 'featured', 'sort', 'status', 'new'], 'integer'],
            [['slug'], 'match', 'pattern' => static::SLUG_PATTERN],
            [['slug'], 'unique'],
            [['price', 'sold'], 'number'],
            [['price', 'featured', 'qty'], 'default', 'value' => 0],
            [['brief', 'description', 'body', 'advantages', 'directions'], 'string'],
            [['code'], 'string', 'max' => 32],
            [['title', 'slug'], 'string', 'max' => 255],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'target' => Yii::t('app', 'Target'),
            'code' => Yii::t('app', 'Code'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'advantages' => Yii::t('app', 'Advantages'),
            'directions' => Yii::t('app', 'Directions'),
            'new' => Yii::t('app', 'New'),
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
    
     /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReciepe()
    {
        return $this->hasMany(Reciepe::className(), ['product_id' => 'id']);
    }
    
    public function behaviors() {
        return array_merge_recursive(parent::behaviors(), [
            'SluggableBehavior' => [
                'class' => \yii\behaviors\SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
                'immutable' => true,
                'ensureUnique' => true,
            //'uniqueValidator' => ['targetAttribute' => ['slug', 'type']]
            ],
            'Sortable' => [
                'class' => \digi\sortable\behaviors\Sortable::className(),
                'query' => static::find(),
                'orderAttribute' => 'sort'
            ],
        ]);
    }
    
    /**
     * @return bool true if $qty in stock
     */
    public function inStock($qty = 1) {
        return $this->qty >= $qty;
    }
    
    public static function find() {
        //Set default condition
        return (new query\Product(get_called_class()))
                ->andWhere(static::TARGET ? ['target' => static::TARGET] : null)
                ->andWhere(Yii::$app->session->has('target') ? ['target' => Yii::$app->session->get('target')] : null);
    }
}
