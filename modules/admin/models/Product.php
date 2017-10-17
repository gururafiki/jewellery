<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $name
 * @property string $metal_1
 * @property string $metal_2
 * @property string $metal_3
 * @property string $metal_4
 * @property string $metal_5
 * @property string $insert_1
 * @property string $insert_2
 * @property string $insert_3
 * @property string $insert_4
 * @property string $insert_5
 * @property string $gender
 * @property string $type
 * @property string $producer
 * @property string $price_buy
 * @property string $profit
 * @property string $price_sell
 * @property double $profit_sum
 * @property string $count
 * @property string $count_sold
 * @property double $size
 * @property double $weight_full
 * @property string $weight_metals
 * @property string $weight_inserts
 * @property string $carat_inserts
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_buy', 'profit', 'price_sell', 'count_total','count_available', 'count_sold'], 'integer'],
            [['profit_sum', 'size', 'weight_full'], 'number'],
            [['name', 'metal_1', 'metal_2', 'metal_3', 'metal_4', 'metal_5', 'insert_1', 'insert_2', 'insert_3', 'insert_4', 'insert_5', 'gender', 'type', 'producer', 'weight_metals', 'weight_inserts', 'carat_inserts'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'metal_1' => 'Осн. метал',
            'metal_2' => 'Доп. метал',
            'metal_3' => 'Доп. метал',
            'metal_4' => 'Доп. метал',
            'metal_5' => 'Доп. метал',
            'insert_1' => 'Осн.вставка',
            'insert_2' => 'Доп. вставка',
            'insert_3' => 'Доп. вставка',
            'insert_4' => 'Доп. вставка',
            'insert_5' => 'Доп. вставка',
            'gender' => 'Пол',
            'type' => 'Категория',
            'producer' => 'Производитель',
            'price_buy' => 'Закупочная цена',
            'profit' => 'Наценка',
            'price_sell' => 'Цена продажи',
            'profit_sum' => 'Прибыль',
            'count_total' => 'Кол-во всего',
            'count_available' => 'Кол-во в наличии',
            'count_sold' => 'Кол-во продано',
            'size' => 'Размер',
            'weight_full' => 'Вес изделия',
            'weight_metals' => 'Вес металов',
            'weight_inserts' => 'Вес вставок',
            'carat_inserts' => 'Караты вставок',
        ];
    }
}
