<?php

namespace app\models;
use app\models\User;
use Yii;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
   
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_staff', 'username', 'password', 'role'], 'required'],
            [['id_staff', 'role'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['id_staff'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['id_staff' => 'id']],
        ];
    }

    public static function findIdentity($id)
    {
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        $user = User::findOne($id);
        if($user !== null){
            return new static($user);
        }
        return null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

        $user = User::find()->where(['accessToken'=>$token])->one();
        if(count($user))
        {
            return new static($user);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_staff' => 'Id Staff',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    public static function findByUsername($username)
    {
        $user = User::find()->where(['username'=>$username])->one();
        if($user !== null)
        {
            return new static($user);
        }

        return null;
    }
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'id_staff']);
    }
}
