<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datainformation;

/**
 * Datainformationsearch represents the model behind the search form about `app\models\Datainformation`.
 */
class Datainformationsearch extends Datainformation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pi'], 'integer'],
            [['nam', 'dat', 'sen', 'img'], 'safe'],
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
        $query = Datainformation::find();

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
            'pi' => $this->pi,
        ]);

        $query->andFilterWhere(['like', 'nam', $this->nam])
            ->andFilterWhere(['like', 'dat', $this->dat])
            ->andFilterWhere(['like', 'sen', $this->sen])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
