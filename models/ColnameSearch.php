<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Colname;

/**
 * ColnameSearch represents the model behind the search form about `app\models\Colname`.
 */
class ColnameSearch extends Colname
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'about'], 'safe'],
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
        $query = Colname::find();

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
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'president', $this->president])
            ->andFilterWhere(['like', 'url_fin_aid', $this->url_fin_aid])
            ->andFilterWhere(['like', 'url_admissions', $this->url_admissions])
            ->andFilterWhere(['like', 'url_apply', $this->url_apply])
            ->andFilterWhere(['like', 'grad_rate', $this->grad_rate])
            ->andFilterWhere(['like', 'grad_rate_men', $this->grad_rate_men])
            ->andFilterWhere(['like', 'grad_rate_women', $this->grad_rate_women])
            ->andFilterWhere(['like', 'apply_fee', $this->apply_fee])
            ->andFilterWhere(['like', 'about', $this->about]);

        return $dataProvider;
    }
}
