<?php

namespace app\vendor\joan\intrusos\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\vendor\joan\intrusos\models\File;

/**
 * FileSearch represents the model behind the search form of `app\vendor\joan\intrusos\models\File`.
 */
class FileSearch extends File
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fil_id', 'fil_fkstatus'], 'integer'],
            [['fil_nombre', 'fil_ruta'], 'safe'],
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
        $query = File::find();

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
        $query->andFilterWhere([
            'fil_id' => $this->fil_id,
            'fil_fkstatus' => $this->fil_fkstatus,
        ]);

        $query->andFilterWhere(['like', 'fil_nombre', $this->fil_nombre])
            ->andFilterWhere(['like', 'fil_ruta', $this->fil_ruta]);

        return $dataProvider;
    }
}
