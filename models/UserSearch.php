<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * CrudSearch represents the model behind the search form about `frontend\models\Crud`.
 */
class UserSearch extends User
{
    public $title;
    public $phone;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['title', 'string'],
            ['username', 'string'],
            ['email', 'string'],
            ['phone', 'string'],
            ['city', 'string'],
            ['state', 'string'],
            ['status', 'string'],
            ['name', 'string'],
            ['role', 'string'],
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
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'title' => $this->title,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'city' => $this->city,
            'state' => $this->state,
            'status' => $this->status,
            'role' => $this->role,
        ]);

        return $dataProvider;
    }
}
