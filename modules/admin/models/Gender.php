<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "genders".
 *
 * @property string $id
 * @property string $name
 * @property string $count_unical
 * @property string $count_total
 * @property string $count_sold
 * @property string $count_available
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count_unical', 'count_total', 'count_sold', 'count_available'], 'integer'],
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
            'count_unical' => 'Count Unical',
            'count_total' => 'Count Total',
            'count_sold' => 'Count Sold',
            'count_available' => 'Count Available',
        ];
    }
}
