<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_buy', 'profit', 'price_sell', 'count_total','count_available', 'count_sold'], 'integer'],
            [['name', 'metal_1', 'metal_2', 'metal_3', 'metal_4', 'metal_5', 'insert_1', 'insert_2', 'insert_3', 'insert_4', 'insert_5', 'gender', 'type', 'producer', 'weight_metals', 'weight_inserts', 'carat_inserts'], 'safe'],
            [['profit_sum', 'size', 'weight_full'], 'number'],
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
        $query = Product::find();

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
            'price_buy' => $this->price_buy,
            'profit' => $this->profit,
            'price_sell' => $this->price_sell,
            'profit_sum' => $this->profit_sum,
            'count' => $this->count,
            'count_sold' => $this->count_sold,
            'size' => $this->size,
            'weight_full' => $this->weight_full,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'metal_1', $this->metal_1])
            ->andFilterWhere(['like', 'metal_2', $this->metal_2])
            ->andFilterWhere(['like', 'metal_3', $this->metal_3])
            ->andFilterWhere(['like', 'metal_4', $this->metal_4])
            ->andFilterWhere(['like', 'metal_5', $this->metal_5])
            ->andFilterWhere(['like', 'insert_1', $this->insert_1])
            ->andFilterWhere(['like', 'insert_2', $this->insert_2])
            ->andFilterWhere(['like', 'insert_3', $this->insert_3])
            ->andFilterWhere(['like', 'insert_4', $this->insert_4])
            ->andFilterWhere(['like', 'insert_5', $this->insert_5])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'producer', $this->producer])
            ->andFilterWhere(['like', 'weight_metals', $this->weight_metals])
            ->andFilterWhere(['like', 'weight_inserts', $this->weight_inserts])
            ->andFilterWhere(['like', 'carat_inserts', $this->carat_inserts]);

        return $dataProvider;
    }
}
