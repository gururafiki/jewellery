<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id
 * @property string $name
 * @property string $group
 * @property string $key
 * @property string $login
 * @property string $password
 * @property string $count
 * @property string $total
 * @property string $date
 * @property string $day
 * @property string $month
 * @property string $year
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'count_transactions', 'total_price', 'day', 'month', 'year'], 'integer'],
            [['name', 'group', 'key', 'login', 'password', 'date'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя клиента',
            'group' => 'Группа',
            'key' => 'Ключ',
            'login' => 'Login',
            'password' => 'Password',
            'count_transactions' => 'Кол-во покупок',
            'total_price' => 'На сумму',
            'date' => 'Дата и время',
            'day' => 'Day',
            'month' => 'Month',
            'year' => 'Year',
        ];
    }
}
