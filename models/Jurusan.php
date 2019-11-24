<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Formulir[] $formulirs
 * @property Formulir[] $formulirs0
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
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
        return $this->hasMany(Formulir::className(), ['id_jurusan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormulirs0()
    {
        return $this->hasMany(Formulir::className(), ['id_jurusan_2' => 'id']);
    }

    public function getList()
    {
        $query = Jurusan::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
