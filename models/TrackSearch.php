<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Track;

/**
 * TrackSearch represents the model behind the search form about `app\models\Track`.
 */
class TrackSearch extends Track
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'model_id'], 'integer'],
            [['model_type', 'specialty', 'specialty_other', 'degree_desired', 'test_score', 'gpa', 'scholarship_award', 'status', 'date_sent', 'date_status_complete', 'date_update'], 'safe'],
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
        $query = Track::find();

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
            'model_id' => $this->model_id,
            'date_sent' => $this->date_sent,
            'date_status_complete' => $this->date_status_complete,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'model_type', $this->model_type])
            ->andFilterWhere(['like', 'specialty', $this->specialty])
            ->andFilterWhere(['like', 'degree_desired', $this->degree_desired])
            ->andFilterWhere(['like', 'test_score', $this->test_score])
            ->andFilterWhere(['like', 'gpa', $this->gpa])
            ->andFilterWhere(['like', 'scholarship_award', $this->scholarship_award])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
