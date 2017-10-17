<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sellers".
 *
 * @property string $id
 * @property string $name
 * @property string $group
 * @property string $date
 * @property string $day
 * @property string $month
 * @property string $year
 * @property string $count
 * @property string $total
 */
class Seller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sellers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day', 'month', 'year', 'count_transactions', 'total_price'], 'integer'],
            [['name', 'group', 'date'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя продавца',
            'group' => 'Группа',
            'date' => 'Дата',
            'day' => 'Day',
            'month' => 'Month',
            'year' => 'Year',
            'count_transactions' => 'Кол-во покупок',
            'total_price' => 'На сумму',
        ];
    }
}
