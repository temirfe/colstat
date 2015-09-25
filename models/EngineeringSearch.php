<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Engineering;

/**
 * EngineeringSearch represents the model behind the search form about `app\models\Engineering`.
 */
class EngineeringSearch extends Engineering
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'appl_ttl', 'appl_men', 'appl_wmen', 'adm_ttl', 'adm_men', 'adm_wmen', 'grad_enr', 'avg_gmat'], 'integer'],
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'about', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out', 'ft_grad_empl_grad', 'avg_start_sal', 'avg_ugrad_gpa', 'ft_grad_empl_3month', 'campus_set', 'campus_house', 'stud_popul'], 'safe'],
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
        $query = Engineering::find();

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
            'appl_ttl' => $this->appl_ttl,
            'appl_men' => $this->appl_men,
            'appl_wmen' => $this->appl_wmen,
            'adm_ttl' => $this->adm_ttl,
            'adm_men' => $this->adm_men,
            'adm_wmen' => $this->adm_wmen,
            'grad_enr' => $this->grad_enr,
            'avg_gmat' => $this->avg_gmat,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'president', $this->president])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'url_fin_aid', $this->url_fin_aid])
            ->andFilterWhere(['like', 'url_admissions', $this->url_admissions])
            ->andFilterWhere(['like', 'url_apply', $this->url_apply])
            ->andFilterWhere(['like', 'grad_rate', $this->grad_rate])
            ->andFilterWhere(['like', 'grad_rate_men', $this->grad_rate_men])
            ->andFilterWhere(['like', 'grad_rate_women', $this->grad_rate_women])
            ->andFilterWhere(['like', 'apply_fee', $this->apply_fee])
            ->andFilterWhere(['like', 'pct_adm_ttl', $this->pct_adm_ttl])
            ->andFilterWhere(['like', 'pct_adm_men', $this->pct_adm_men])
            ->andFilterWhere(['like', 'pct_adm_wmen', $this->pct_adm_wmen])
            ->andFilterWhere(['like', 'pct_fullfirst_any_finaid', $this->pct_fullfirst_any_finaid])
            ->andFilterWhere(['like', 'avg_fullfirst_loan', $this->avg_fullfirst_loan])
            ->andFilterWhere(['like', 'pct_fullfirst_loan', $this->pct_fullfirst_loan])
            ->andFilterWhere(['like', 'avg_fullfirst_oloan', $this->avg_fullfirst_oloan])
            ->andFilterWhere(['like', 'tuition_in', $this->tuition_in])
            ->andFilterWhere(['like', 'tuition_out', $this->tuition_out])
            ->andFilterWhere(['like', 'ft_grad_empl_grad', $this->ft_grad_empl_grad])
            ->andFilterWhere(['like', 'avg_start_sal', $this->avg_start_sal])
            ->andFilterWhere(['like', 'avg_ugrad_gpa', $this->avg_ugrad_gpa])
            ->andFilterWhere(['like', 'ft_grad_empl_3month', $this->ft_grad_empl_3month])
            ->andFilterWhere(['like', 'campus_set', $this->campus_set])
            ->andFilterWhere(['like', 'campus_house', $this->campus_house])
            ->andFilterWhere(['like', 'stud_popul', $this->stud_popul]);

        return $dataProvider;
    }
}
