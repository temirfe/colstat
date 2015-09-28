<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nursing;

/**
 * NursingSearch represents the model behind the search form about `app\models\Nursing`.
 */
class NursingSearch extends Nursing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'city', 'state', 'address', 'url', 'about', 'inst_type', 'campus_set', 'campus_house', 'stud_popul', 'grad_rate', 'transfer_out_rate'], 'safe'],
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
        $query = Nursing::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'inst_type', $this->inst_type])
            ->andFilterWhere(['like', 'campus_set', $this->campus_set])
            ->andFilterWhere(['like', 'campus_house', $this->campus_house])
            ->andFilterWhere(['like', 'stud_popul', $this->stud_popul])
            ->andFilterWhere(['like', 'grad_rate', $this->grad_rate])
            ->andFilterWhere(['like', 'transfer_out_rate', $this->transfer_out_rate]);

        return $dataProvider;
    }
}
