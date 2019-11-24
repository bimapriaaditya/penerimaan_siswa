<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "penyakit".
 *
 * @property int $id
 * @property string $nama
 *
 * @property RiwayatPenyakit[] $riwayatPenyakits
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPenyakits()
    {
        return $this->hasMany(RiwayatPenyakit::className(), ['id_penyakit' => 'id']);
    }

    public function getList()
    {
        $query = Penyakit::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama'); 
    }
}
