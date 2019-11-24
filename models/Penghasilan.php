<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "penghasilan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property JalurSktm[] $jalurSktms
 * @property JalurSktm[] $jalurSktms0
 */
class Penghasilan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penghasilan';
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
    public function getJalurSktms()
    {
        return $this->hasMany(JalurSktm::className(), ['id_penghasilan_ayah' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJalurSktms0()
    {
        return $this->hasMany(JalurSktm::className(), ['id_penghasilan_ibu' => 'id']);
    }

    public function getList()
    {
        $query = Penghasilan::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
