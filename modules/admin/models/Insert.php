<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "inserts".
 *
 * @property string $id
 * @property string $name
 * @property double $weight
 * @property string $carat
 * @property string $count_unical
 * @property string $count_total
 * @property string $count_sold
 * @property double $weight_sold
 * @property string $count_available
 * @property double $weight_available
 */
class Insert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inserts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['weight', 'weight_sold', 'weight_available'], 'number'],
            [['carat', 'count_unical', 'count_total', 'count_sold', 'count_available'], 'integer'],
            [['name'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'weight' => 'Weight',
            'carat' => 'Carat',
            'count_unical' => 'Count Unical',
            'count_total' => 'Count Total',
            'count_sold' => 'Count Sold',
            'weight_sold' => 'Weight Sold',
            'count_available' => 'Count Available',
            'weight_available' => 'Weight Available',
        ];
    }
}
