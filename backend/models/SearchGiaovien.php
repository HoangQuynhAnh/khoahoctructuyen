<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * SearchGiaovien represents the model behind the search form of `common\models\User`.
 */
class SearchGiaovien extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'username', 'password_hash', 'password_reset_token', 'email', 'auth_key', 'role', 'status', 'created_at', 'updated_at', 'hoten', 'diachi', 'noicongtac', 'monday', 'hocvi', 'gioitinh', 'fb', 'gioithieu', 'anh', 'ngaysinh', 'khoahoc'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'role', $this->role])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at])
            ->andFilterWhere(['like', 'hoten', $this->hoten])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'noicongtac', $this->noicongtac])
            ->andFilterWhere(['like', 'monday', $this->monday])
            ->andFilterWhere(['like', 'hocvi', $this->hocvi])
            ->andFilterWhere(['like', 'gioitinh', $this->gioitinh])
            ->andFilterWhere(['like', 'fb', $this->fb])
            ->andFilterWhere(['like', 'gioithieu', $this->gioithieu])
            ->andFilterWhere(['like', 'anh', $this->anh])
            ->andFilterWhere(['like', 'ngaysinh', $this->ngaysinh])
            ->andFilterWhere(['like', 'khoahoc', $this->khoahoc]);

        return $dataProvider;
    }
}
