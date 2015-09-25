<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Law;

/**
 * LawSearch represents the model behind the search form about `app\models\Law`.
 */
class LawSearch extends Law
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'appl_ttl', 'appl_men', 'appl_wmen', 'adm_ttl', 'adm_men', 'adm_wmen', 'l_class_size', 'lsat_75', 'lsat_50', 'lsat_25', 'scholar_less_full', 'scholar_full', 'scholar_more_full', 'ttl_stud_granted', 'grant_per_75', 'grant_per_50', 'grant_per_25'], 'integer'],
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'about', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out', 'gpa_75', 'gpa_50', 'gpa_25', 'expen_offcamp', 'expen_athome'], 'safe'],
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
        $query = Law::find();

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
            'l_class_size' => $this->l_class_size,
            'lsat_75' => $this->lsat_75,
            'lsat_50' => $this->lsat_50,
            'lsat_25' => $this->lsat_25,
            'scholar_less_full' => $this->scholar_less_full,
            'scholar_full' => $this->scholar_full,
            'scholar_more_full' => $this->scholar_more_full,
            'ttl_stud_granted' => $this->ttl_stud_granted,
            'grant_per_75' => $this->grant_per_75,
            'grant_per_50' => $this->grant_per_50,
            'grant_per_25' => $this->grant_per_25,
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
            ->andFilterWhere(['like', 'gpa_75', $this->gpa_75])
            ->andFilterWhere(['like', 'gpa_50', $this->gpa_50])
            ->andFilterWhere(['like', 'gpa_25', $this->gpa_25])
            ->andFilterWhere(['like', 'expen_offcamp', $this->expen_offcamp])
            ->andFilterWhere(['like', 'expen_athome', $this->expen_athome]);

        return $dataProvider;
    }
}
