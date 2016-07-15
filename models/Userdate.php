<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userdate".
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $date_up
 * @property string $date_now
 */
class Userdate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userdate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['date_up', 'date_now'], 'safe'],
            [['name', 'email', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'date_up' => 'Date Up',
            'date_now' => 'Date Now',
        ];
    }
}
