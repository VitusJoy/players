<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Players;

/**
 * PlayerSearch represents the model behind the search form of `app\models\Players`.
 */
class PlayerSearch extends Players
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'p_status', 'p_cat'], 'integer'],
            [['p_name', 'p_image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Players::find();

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
            'p_status' => $this->p_status,
            'p_cat' => $this->p_cat,
        ]);

        $query->andFilterWhere(['like', 'p_name', $this->p_name])
            ->andFilterWhere(['like', 'p_image', $this->p_image]);

        return $dataProvider;
    }
}
