<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "buys".
 *
 * @property string $id
 * @property string $username
 * @property string $product_id
 * @property integer $product_name
 * @property integer $product_price
 * @property integer $count
 * @property string $date
 * @property string $day
 * @property string $month
 * @property string $year
 */
class Buy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_name', 'product_price', 'count', 'day', 'month', 'year'], 'integer'],
            [['username', 'date'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Имя покупателя',
            'product_id' => 'ID товара',
            'product_name' => 'Наименования товара',
            'product_price' => 'Цена товара',
            'count' => 'Кол-во в чеке',
            'date' => 'Дата и время',
            'day' => 'Day',
            'month' => 'Month',
            'year' => 'Year',
        ];
    }
}
