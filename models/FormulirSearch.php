<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Formulir;

/**
 * FormulirSearch represents the model behind the search form of `app\models\Formulir`.
 */
class FormulirSearch extends Formulir
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_calon_siswa', 'jarak_sekolah', 'id_jalur_pendaftaran', 'id_smp', 'id_agama', 'id_jurusan', 'id_jurusan_2', 'nama_orang_tua', 'tinggi_badan', 'berat_badan'], 'integer'],
            [['nama_lengkap', 'nisn', 'nik', 'alamat', 'tanggal_daftar', 'keterangan'], 'safe'],
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
        $query = Formulir::find();

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
            'jarak_sekolah' => $this->jarak_sekolah,
            'id_jalur_pendaftaran' => $this->id_jalur_pendaftaran,
            'id_smp' => $this->id_smp,
            'id_agama' => $this->id_agama,
            'id_jurusan' => $this->id_jurusan,
            'id_jurusan_2' => $this->id_jurusan_2,
            'nama_orang_tua' => $this->nama_orang_tua,
            'tinggi_badan' => $this->tinggi_badan,
            'berat_badan' => $this->berat_badan,
            'tanggal_daftar' => $this->tanggal_daftar,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
