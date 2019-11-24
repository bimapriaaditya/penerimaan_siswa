<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tempat_tinggal".
 *
 * @property int $id
 * @property string $nama
 *
 * @property JalurSktm[] $jalurSktms
 */
class TempatTinggal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tempat_tinggal';
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
        return $this->hasMany(JalurSktm::className(), ['id_tempat_tinggal' => 'id']);
    }

    public function getList()
    {
        $query = TempatTinggal::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
