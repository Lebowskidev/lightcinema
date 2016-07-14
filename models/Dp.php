<?php
namespace app\models;

use yii\db\ActiveRecord;


class Dp extends ActiveRecord
{
    public $name;
    public $password;

    public function rules()
    {
        return [
            [['name','password'], 'required'],
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
            'password' => 'Password'
        ];
    }

}
?>