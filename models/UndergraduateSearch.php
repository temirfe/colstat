<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Undergraduate;

/**
 * UndergraduateSearch represents the model behind the search form about `app\models\Undergraduate`.
 */
class UndergraduateSearch extends Undergraduate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'graduate', 'ugrad_enr', 'ft_ugrad_enr', 'pt_ugrad_enr', 'appl_ttl', 'appl_men', 'appl_wmen', 'adm_ttl', 'adm_men', 'adm_wmen', 'sat_cr_25', 'sat_cr_75', 'sat_ma_25', 'sat_ma_75', 'sat_wr_25', 'sat_wr_75', 'act_co_25', 'act_co_75', 'act_en_25', 'act_en_75', 'act_ma_25', 'act_ma_75', 'act_wr_25', 'act_wr_75'], 'integer'],
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'about', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_ue_native', 'pct_ue_asian', 'pct_ue_black', 'pct_ue_latino', 'pct_ue_white', 'pct_ue_two', 'pct_ue_unk', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out'], 'safe'],
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
        $query = Undergraduate::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $states= array('AL'=>"Alabama",
            'AK'=>"Alaska",
            'AZ'=>"Arizona",
            'AR'=>"Arkansas",
            'CA'=>"California",
            'CO'=>"Colorado",
            'CT'=>"Connecticut",
            'DE'=>"Delaware",
            'DC'=>"District Of Columbia",
            'FL'=>"Florida",
            'GA'=>"Georgia",
            'HI'=>"Hawaii",
            'ID'=>"Idaho",
            'IL'=>"Illinois",
            'IN'=>"Indiana",
            'IA'=>"Iowa",
            'KS'=>"Kansas",
            'KY'=>"Kentucky",
            'LA'=>"Louisiana",
            'ME'=>"Maine",
            'MD'=>"Maryland",
            'MA'=>"Massachusetts",
            'MI'=>"Michigan",
            'MN'=>"Minnesota",
            'MS'=>"Mississippi",
            'MO'=>"Missouri",
            'MT'=>"Montana",
            'NE'=>"Nebraska",
            'NV'=>"Nevada",
            'NH'=>"New Hampshire",
            'NJ'=>"New Jersey",
            'NM'=>"New Mexico",
            'NY'=>"New York",
            'NC'=>"North Carolina",
            'ND'=>"North Dakota",
            'OH'=>"Ohio",
            'OK'=>"Oklahoma",
            'OR'=>"Oregon",
            'PA'=>"Pennsylvania",
            'RI'=>"Rhode Island",
            'SC'=>"South Carolina",
            'SD'=>"South Dakota",
            'TN'=>"Tennessee",
            'TX'=>"Texas",
            'UT'=>"Utah",
            'VT'=>"Vermont",
            'VA'=>"Virginia",
            'WA'=>"Washington",
            'WV'=>"West Virginia",
            'WI'=>"Wisconsin",
            'WY'=>"Wyoming");
        foreach($states as $st=>$state){
            if(strtolower($this->state)==strtolower($state)) $this->state=$st;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'graduate' => $this->graduate,
            'ugrad_enr' => $this->ugrad_enr,
            'ft_ugrad_enr' => $this->ft_ugrad_enr,
            'pt_ugrad_enr' => $this->pt_ugrad_enr,
            'appl_ttl' => $this->appl_ttl,
            'appl_men' => $this->appl_men,
            'appl_wmen' => $this->appl_wmen,
            'adm_ttl' => $this->adm_ttl,
            'adm_men' => $this->adm_men,
            'adm_wmen' => $this->adm_wmen,
            'sat_cr_25' => $this->sat_cr_25,
            'sat_cr_75' => $this->sat_cr_75,
            'sat_ma_25' => $this->sat_ma_25,
            'sat_ma_75' => $this->sat_ma_75,
            'sat_wr_25' => $this->sat_wr_25,
            'sat_wr_75' => $this->sat_wr_75,
            'act_co_25' => $this->act_co_25,
            'act_co_75' => $this->act_co_75,
            'act_en_25' => $this->act_en_25,
            'act_en_75' => $this->act_en_75,
            'act_ma_25' => $this->act_ma_25,
            'act_ma_75' => $this->act_ma_75,
            'act_wr_25' => $this->act_wr_25,
            'act_wr_75' => $this->act_wr_75,
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
            ->andFilterWhere(['like', 'pct_ue_native', $this->pct_ue_native])
            ->andFilterWhere(['like', 'pct_ue_asian', $this->pct_ue_asian])
            ->andFilterWhere(['like', 'pct_ue_black', $this->pct_ue_black])
            ->andFilterWhere(['like', 'pct_ue_latino', $this->pct_ue_latino])
            ->andFilterWhere(['like', 'pct_ue_white', $this->pct_ue_white])
            ->andFilterWhere(['like', 'pct_ue_two', $this->pct_ue_two])
            ->andFilterWhere(['like', 'pct_ue_unk', $this->pct_ue_unk])
            ->andFilterWhere(['like', 'pct_fullfirst_any_finaid', $this->pct_fullfirst_any_finaid])
            ->andFilterWhere(['like', 'avg_fullfirst_loan', $this->avg_fullfirst_loan])
            ->andFilterWhere(['like', 'pct_fullfirst_loan', $this->pct_fullfirst_loan])
            ->andFilterWhere(['like', 'avg_fullfirst_oloan', $this->avg_fullfirst_oloan])
            ->andFilterWhere(['like', 'tuition_in', $this->tuition_in])
            ->andFilterWhere(['like', 'tuition_out', $this->tuition_out]);

        return $dataProvider;
    }
}
