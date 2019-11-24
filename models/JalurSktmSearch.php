<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JalurSktm;

/**
 * JalurSktmSearch represents the model behind the search form of `app\models\JalurSktm`.
 */
class JalurSktmSearch extends JalurSktm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_calon_siswa', 'nilai_mtk', 'nilai_indo', 'nilai_ipa', 'nilai_inggris', 'id_pekerjaan_ibu', 'id_penghasilan_ibu', 'id_pekerjaan_ayah', 'id_penghasilan_ayah', 'id_tempat_tinggal'], 'integer'],
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
        $query = JalurSktm::find();

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
            'id_pekerjaan_ibu' => $this->id_pekerjaan_ibu,
            'id_penghasilan_ibu' => $this->id_penghasilan_ibu,
            'id_pekerjaan_ayah' => $this->id_pekerjaan_ayah,
            'id_penghasilan_ayah' => $this->id_penghasilan_ayah,
            'id_tempat_tinggal' => $this->id_tempat_tinggal,
        ]);

        return $dataProvider;
    }
}
