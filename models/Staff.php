<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $nama
 * @property string $nip
 * @property string $alamat
 * @property string $no_telepon
 * @property string $email
 *
 * @property User[] $users
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'alamat', 'no_telepon', 'email'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'nip', 'no_telepon', 'email'], 'string', 'max' => 255],
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
            'nip' => 'Nip',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_staff' => 'id']);
    }

    public function getList()
    {
        $query = Staff::find()->orderBy(['nama' => SORT_ASC])->all();
        return ArrayHelper::map($query,'id','nama');
    }
}
