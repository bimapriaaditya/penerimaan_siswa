<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calon_siswa".
 *
 * @property int $id
 * @property string $nama
 * @property int $jenis_kelamin
 * @property string $no_telepon
 * @property string $email
 *
 * @property Formulir[] $formulirs
 */
class CalonSiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calon_siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kelamin', 'no_telepon', 'email'], 'required'],
            [['jenis_kelamin'], 'integer'],
            [['nama', 'no_telepon', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormulirs()
    {
        return $this->hasMany(Formulir::className(), ['id_calon_siswa' => 'id']);
    }

    function setGender()
    {
        
    }
}
