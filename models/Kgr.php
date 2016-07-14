<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kgr".
 *
 * @property string $pi
 * @property string $nam
 * @property string $dat
 * @property string $sen
 */
class Kgr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kgr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nam'], 'required'],
            [['dat', 'sen'], 'string'],
            [['nam'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pi' => 'Pi',
            'nam' => 'Nam',
            'dat' => 'Dat',
            'sen' => 'Sen',
        ];
    }
}
