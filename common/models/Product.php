<?php

namespace common\models;

use Yii;
use yz\shoppingcart\CartPositionInterface;
use yz\shoppingcart\CartPositionTrait;



/**
 * This is the model class for table "product".
 *
 * @property string $code
 * @property string $name
 * @property string $type
 * @property string $description
 * @property int $Cost
 */
class Product extends \yii\db\ActiveRecord implements CartPositionInterface
{
    use CartPositionTrait;

    public function getPrice()
    {
        return $this->Cost;
    }

    public function getId()
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', 'type', 'description','Cost'], 'required'],
            [['code'], 'string', 'max' => 7],
            [['name', 'type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['Cost'], 'integer'],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'type' => 'Type',
            'description' => 'Description',
            'Cost' => 'Cost'
        ];
    }
}
