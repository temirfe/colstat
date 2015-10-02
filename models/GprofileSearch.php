<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gprofile;

/**
 * GprofileSearch represents the model behind the search form about `app\models\Gprofile`.
 */
class GprofileSearch extends Gprofile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'int_applicant'], 'integer'],
            [['gender', 'ethnicity', 'appl_cycle_year', 'undergrad_inst', 'major', 'degree_awarded', 'gpa', 'class_rank', 'work_exp', 'study_abroad_exp', 'extracur', 'leadership_roles', 'honors', 'additional_info'], 'safe'],
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
        $query = Gprofile::find();

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
            'user_id' => $this->user_id,
            'int_applicant' => $this->int_applicant,
        ]);

        $query->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'ethnicity', $this->ethnicity])
            ->andFilterWhere(['like', 'appl_cycle_year', $this->appl_cycle_year])
            ->andFilterWhere(['like', 'undergrad_inst', $this->undergrad_inst])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'degree_awarded', $this->degree_awarded])
            ->andFilterWhere(['like', 'gpa', $this->gpa])
            ->andFilterWhere(['like', 'class_rank', $this->class_rank])
            ->andFilterWhere(['like', 'work_exp', $this->work_exp])
            ->andFilterWhere(['like', 'study_abroad_exp', $this->study_abroad_exp])
            ->andFilterWhere(['like', 'extracur', $this->extracur])
            ->andFilterWhere(['like', 'leadership_roles', $this->leadership_roles])
            ->andFilterWhere(['like', 'honors', $this->honors])
            ->andFilterWhere(['like', 'additional_info', $this->additional_info]);

        return $dataProvider;
    }
}
