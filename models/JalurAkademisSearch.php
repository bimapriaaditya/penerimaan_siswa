<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JalurAkademis;

/**
 * JalurAkademisSearch represents the model behind the search form of `app\models\JalurAkademis`.
 */
class JalurAkademisSearch extends JalurAkademis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_calon_siswa', 'nilai_mtk', 'nilai_indo', 'nilai_ipa', 'nilai_inggris', 'nilai_un'], 'integer'],
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
        $query = JalurAkademis::find();

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
            'id' => $this->id,
            'id_calon_siswa' => $this->id_calon_siswa,
            'nilai_mtk' => $this->nilai_mtk,
            'nilai_indo' => $this->nilai_indo,
            'nilai_ipa' => $this->nilai_ipa,
            'nilai_inggris' => $this->nilai_inggris,
            'nilai_un' => $this->nilai_un,
        ]);

        return $dataProvider;
    }
}
