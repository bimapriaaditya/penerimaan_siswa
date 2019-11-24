<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "agama".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Formulir[] $formulirs
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
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
        return $this->hasMany(Formulir::className(), ['id_agama' => 'id']);
    }

    public function getList()
    {
        $query = Agama::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
