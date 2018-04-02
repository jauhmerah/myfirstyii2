<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProgramCode;

/**
 * ProgramCodeSearch represents the model behind the search form of `app\models\ProgramCode`.
 */
class ProgramCodeSearch extends ProgramCode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pc_id'], 'integer'],
            [['pc_code', 'pc_desc', 'pc_is_deleted', 'pc_created_at', 'pc_updated_at', 'pc_created_by'], 'safe'],
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
        $query = ProgramCode::find();

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
            'pc_id' => $this->pc_id,
            'pc_created_at' => $this->pc_created_at,
            'pc_updated_at' => $this->pc_updated_at,
        ]);

        $query->andFilterWhere(['like', 'pc_code', $this->pc_code])
            ->andFilterWhere(['like', 'pc_desc', $this->pc_desc])
            ->andFilterWhere(['like', 'pc_is_deleted', $this->pc_is_deleted])
            ->andFilterWhere(['like', 'pc_created_by', $this->pc_created_by]);

        return $dataProvider;
    }
}
