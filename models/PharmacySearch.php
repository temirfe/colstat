<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pharmacy;

/**
 * PharmacySearch represents the model behind the search form about `app\models\Pharmacy`.
 */
class PharmacySearch extends Pharmacy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'city', 'state', 'contact', 'pharm_school_name', 'accred_status', 'inst_type', 'main_campus', 'branch_campuses', 'curriculum', 'addit_reqs', 'prereq_courses', 'enter_class_stat', 'appl_process_reqs'], 'safe'],
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
        $query = Pharmacy::find();

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
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'pharm_school_name', $this->pharm_school_name])
            ->andFilterWhere(['like', 'accred_status', $this->accred_status])
            ->andFilterWhere(['like', 'inst_type', $this->inst_type])
            ->andFilterWhere(['like', 'main_campus', $this->main_campus])
            ->andFilterWhere(['like', 'branch_campuses', $this->branch_campuses])
            ->andFilterWhere(['like', 'curriculum', $this->curriculum])
            ->andFilterWhere(['like', 'addit_reqs', $this->addit_reqs])
            ->andFilterWhere(['like', 'prereq_courses', $this->prereq_courses])
            ->andFilterWhere(['like', 'enter_class_stat', $this->enter_class_stat])
            ->andFilterWhere(['like', 'appl_process_reqs', $this->appl_process_reqs]);

        return $dataProvider;
    }
}
