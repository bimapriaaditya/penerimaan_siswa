<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riwayat_penyakit".
 *
 * @property int $id
 * @property int $id_calon_siswa
 * @property int $id_penyakit
 * @property string $keterangan
 *
 * @property Penyakit $penyakit
 * @property CalonSiswa $calonSiswa
 */
class RiwayatPenyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_calon_siswa', 'id_penyakit'], 'required'],
            [['id_calon_siswa', 'id_penyakit'], 'integer'],
            [['keterangan'], 'string'],
            [['id_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::className(), 'targetAttribute' => ['id_penyakit' => 'id']],
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
            'id_penyakit' => 'Id Penyakit',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakit()
    {
        return $this->hasOne(Penyakit::className(), ['id' => 'id_penyakit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonSiswa()
    {
        return $this->hasOne(CalonSiswa::className(), ['id' => 'id_calon_siswa']);
    }
}
