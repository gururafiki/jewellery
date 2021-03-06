<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Metal;

/**
 * MetalSearch represents the model behind the search form about `app\modules\admin\models\Metal`.
 */
class MetalSearch extends Metal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'count_unical', 'count_total', 'count_sold', 'count_available'], 'integer'],
            [['name'], 'safe'],
            [['weight', 'weight_sold', 'weight_available'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Metal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'weight' => $this->weight,
            'count_unical' => $this->count_unical,
            'count_total' => $this->count_total,
            'count_sold' => $this->count_sold,
            'weight_sold' => $this->weight_sold,
            'count_available' => $this->count_available,
            'weight_available' => $this->weight_available,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
