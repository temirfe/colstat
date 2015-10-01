<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UndergradProfile;

/**
 * ProfileSearch represents the model behind the search form about `app\models\UndergradProfile`.
 */
class ProfileSearch extends UndergradProfile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'int_applicant'], 'integer'],
            [['gender', 'ethnicity', 'entering_class', 'prospective_major', 'high_school', 'gpa_unweighted', 'gpa_weighted', 'class_rank', 'class_size', 'ap_courses_taken', 'ib_student', 'foreign_languages_taken', 'years_taken', 'extracur', 'leadership_roles', 'honors', 'additional_info'], 'safe'],
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
        $query = UndergradProfile::find();

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
            ->andFilterWhere(['like', 'entering_class', $this->entering_class])
            ->andFilterWhere(['like', 'prospective_major', $this->prospective_major])
            ->andFilterWhere(['like', 'high_school', $this->high_school])
            ->andFilterWhere(['like', 'gpa_unweighted', $this->gpa_unweighted])
            ->andFilterWhere(['like', 'gpa_weighted', $this->gpa_weighted])
            ->andFilterWhere(['like', 'class_rank', $this->class_rank])
            ->andFilterWhere(['like', 'class_size', $this->class_size])
            ->andFilterWhere(['like', 'ap_courses_taken', $this->ap_courses_taken])
            ->andFilterWhere(['like', 'ib_student', $this->ib_student])
            ->andFilterWhere(['like', 'foreign_languages_taken', $this->foreign_languages_taken])
            ->andFilterWhere(['like', 'years_taken', $this->years_taken])
            ->andFilterWhere(['like', 'extracur', $this->extracur])
            ->andFilterWhere(['like', 'leadership_roles', $this->leadership_roles])
            ->andFilterWhere(['like', 'honors', $this->honors])
            ->andFilterWhere(['like', 'additional_info', $this->additional_info]);

        return $dataProvider;
    }
}
