<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "tbl_user".
 *
 * @property string $userid
 * @property string $username
 * @property string $password
 */
class User extends ActiveRecord implements  IdentityInterface
{
    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
        ]
    ];

    public static function tableName()
    {
        return 'user';
    }


    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 100]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'username' => 'Username',
            'password' => 'Password'
        ];
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

     public function getId()
    {
        return $this->getPrimaryKey();
    }
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
       // return static::findOne(['access_token' => $token]);
    }

    public function getAuthKey()
    {
        //return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        //return $this->getAuthKey() === $authKey;
    }
}
