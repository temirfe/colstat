<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dental;

/**
 * DentalSearch represents the model behind the search form about `app\models\Dental`.
 */
class DentalSearch extends Dental
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'since_year', 'class_size'], 'integer'],
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'dean', 'about', 'url_fin_aid', 'mission', 'first_year_enr', 'curriculum', 'inst_type', 'term_type', 'prog_length', 'sem_start', 'degr_offered', 'contact_fin_aid', 'college_cred_req', 'bac_deg_pref', 'prereq_courses', 'recom_courses', 'gpa', 'dat_score', 'dat_req', 'dat_latest', 'dat_oldest', 'dat_several', 'dat_canada', 'second_appl_req', 'interv_req', 'residents_prefered', 'instate_appl', 'outstate_appl', 'appl_start_date', 'appl_end_date', 'first_accept_date', 'apply_fee', 'fee_waiver_avail', 'racial_dist', 'age_dist', 'research_oppor', 'special_programs', 'tuition', 'living_exp', 'campus_type', 'oncampus_housing'], 'safe'],
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
        $query = Dental::find();

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
            'since_year' => $this->since_year,
            'class_size' => $this->class_size,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'dean', $this->dean])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'url_fin_aid', $this->url_fin_aid])
            ->andFilterWhere(['like', 'mission', $this->mission])
            ->andFilterWhere(['like', 'first_year_enr', $this->first_year_enr])
            ->andFilterWhere(['like', 'curriculum', $this->curriculum])
            ->andFilterWhere(['like', 'inst_type', $this->inst_type])
            ->andFilterWhere(['like', 'term_type', $this->term_type])
            ->andFilterWhere(['like', 'prog_length', $this->prog_length])
            ->andFilterWhere(['like', 'sem_start', $this->sem_start])
            ->andFilterWhere(['like', 'degr_offered', $this->degr_offered])
            ->andFilterWhere(['like', 'contact_fin_aid', $this->contact_fin_aid])
            ->andFilterWhere(['like', 'college_cred_req', $this->college_cred_req])
            ->andFilterWhere(['like', 'bac_deg_pref', $this->bac_deg_pref])
            ->andFilterWhere(['like', 'prereq_courses', $this->prereq_courses])
            ->andFilterWhere(['like', 'recom_courses', $this->recom_courses])
            ->andFilterWhere(['like', 'gpa', $this->gpa])
            ->andFilterWhere(['like', 'dat_score', $this->dat_score])
            ->andFilterWhere(['like', 'dat_req', $this->dat_req])
            ->andFilterWhere(['like', 'dat_latest', $this->dat_latest])
            ->andFilterWhere(['like', 'dat_oldest', $this->dat_oldest])
            ->andFilterWhere(['like', 'dat_several', $this->dat_several])
            ->andFilterWhere(['like', 'dat_canada', $this->dat_canada])
            ->andFilterWhere(['like', 'second_appl_req', $this->second_appl_req])
            ->andFilterWhere(['like', 'interv_req', $this->interv_req])
            ->andFilterWhere(['like', 'residents_prefered', $this->residents_prefered])
            ->andFilterWhere(['like', 'instate_appl', $this->instate_appl])
            ->andFilterWhere(['like', 'outstate_appl', $this->outstate_appl])
            ->andFilterWhere(['like', 'appl_start_date', $this->appl_start_date])
            ->andFilterWhere(['like', 'appl_end_date', $this->appl_end_date])
            ->andFilterWhere(['like', 'first_accept_date', $this->first_accept_date])
            ->andFilterWhere(['like', 'apply_fee', $this->apply_fee])
            ->andFilterWhere(['like', 'fee_waiver_avail', $this->fee_waiver_avail])
            ->andFilterWhere(['like', 'racial_dist', $this->racial_dist])
            ->andFilterWhere(['like', 'age_dist', $this->age_dist])
            ->andFilterWhere(['like', 'research_oppor', $this->research_oppor])
            ->andFilterWhere(['like', 'special_programs', $this->special_programs])
            ->andFilterWhere(['like', 'tuition', $this->tuition])
            ->andFilterWhere(['like', 'living_exp', $this->living_exp])
            ->andFilterWhere(['like', 'campus_type', $this->campus_type])
            ->andFilterWhere(['like', 'oncampus_housing', $this->oncampus_housing]);

        return $dataProvider;
    }
}
