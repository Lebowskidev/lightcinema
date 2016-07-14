<?php
namespace app\models;

use yii\db\ActiveRecord;


class EntryForm extends ActiveRecord
{
    public $name;
    public $email;
    public $password;


    public function rules()
    {
        return [
            [['name', 'email','password'], 'required'],
            ['email', 'email'],
        ];
    }
    public static function tableName()
    {
        return 'userinformation';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
   
}
?>