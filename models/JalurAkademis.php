<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jalur_akademis".
 *
 * @property int $id
 * @property int $id_calon_siswa
 * @property int $nilai_mtk
 * @property int $nilai_indo
 * @property int $nilai_ipa
 * @property int $nilai_inggris
 * @property int $nilai_un
 *
 * @property CalonSiswa $calonSiswa
 */
class JalurAkademis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jalur_akademis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_calon_siswa', 'nilai_mtk', 'nilai_indo', 'nilai_ipa', 'nilai_inggris', 'nilai_un'], 'required'],
            [['id_calon_siswa', 'nilai_mtk', 'nilai_indo', 'nilai_ipa', 'nilai_inggris', 'nilai_un'], 'integer'],
            [['id_calon_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => CalonSiswa::className(), 'targetAttribute' => ['id_calon_siswa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_calon_siswa' => 'Id Calon Siswa',
            'nilai_mtk' => 'Nilai Matematika',
            'nilai_indo' => 'Nilai Bahasa Indonesia',
            'nilai_ipa' => 'Nilai Ilmu Pengetahuan Alam (IPA) ',
            'nilai_inggris' => 'Nilai Bahasa Inggris',
            'nilai_un' => 'Nilai UN',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonSiswa()
    {
        return $this->hasOne(CalonSiswa::className(), ['id' => 'id_calon_siswa']);
    }

    public function setJumlahUn()
    {
        $mtk = $this->nilai_mtk;
        $indo = $this->nilai_indo;
        $ipa = $this->nilai_ipa;
        $inggris = $this->nilai_inggris;

        $hasil = $mtk + $indo + $ipa + $inggris;
        return $hasil;
    }
}
