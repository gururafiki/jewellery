<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sizes".
 *
 * @property string $id
 * @property double $name
 * @property string $type
 * @property string $count
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sizes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'number'],
            [['count'], 'integer'],
            [['type'], 'string', 'max' => 191],
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
            'type' => 'Type',
            'count' => 'Count',
        ];
    }
}
