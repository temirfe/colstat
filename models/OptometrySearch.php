<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Optometry;

/**
 * OptometrySearch represents the model behind the search form about `app\models\Optometry`.
 */
class OptometrySearch extends Optometry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'class_size', 'matricul_female', 'matricul_male', 'matricul_total', 'aa1_avg_oat', 'ts2_avg_oat', 'in_state_amnt', 'out_state_amnt'], 'integer'],
            [['name', 'city', 'state', 'address', 'url', 'about', 'average_gpa', 'pct_ba_deg', 'prereqs'], 'safe'],
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
        $query = Optometry::find();

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
            'class_size' => $this->class_size,
            'matricul_female' => $this->matricul_female,
            'matricul_male' => $this->matricul_male,
            'matricul_total' => $this->matricul_total,
            'aa1_avg_oat' => $this->aa1_avg_oat,
            'ts2_avg_oat' => $this->ts2_avg_oat,
            'in_state_amnt' => $this->in_state_amnt,
            'out_state_amnt' => $this->out_state_amnt,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'average_gpa', $this->average_gpa])
            ->andFilterWhere(['like', 'pct_ba_deg', $this->pct_ba_deg])
            ->andFilterWhere(['like', 'prereqs', $this->prereqs]);

        return $dataProvider;
    }
}
