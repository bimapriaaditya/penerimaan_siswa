<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prestasi".
 *
 * @property int $id
 * @property int $id_calon_siswa
 * @property string $nama
 * @property string $img
 *
 * @property CalonSiswa $calonSiswa
 */
class Prestasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prestasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_calon_siswa', 'nama', 'img'], 'required'],
            [['id_calon_siswa'], 'integer'],
            [['nama'], 'string'],
            [['img'], 'string', 'max' => 255],
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
            'nama' => 'Nama',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonSiswa()
    {
        return $this->hasOne(CalonSiswa::className(), ['id' => 'id_calon_siswa']);
    }
}
