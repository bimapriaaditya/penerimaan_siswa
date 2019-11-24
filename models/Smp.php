<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "smp".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Formulir[] $formulirs
 */
class Smp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'smp';
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
    public function getFormulirs()
    {
        return $this->hasMany(Formulir::className(), ['id_smp' => 'id']);
    }

    public function getList()
    {
        $query = Smp::find()->orderBy(['id' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
