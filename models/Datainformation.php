<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datainformation".
 *
 * @property string $pi
 * @property string $nam
 * @property string $dat
 * @property string $sen
 * @property string $img
 */
class Datainformation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datainformation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nam'], 'required'],
            [['dat', 'sen', 'img'], 'string'],
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
            'img' => 'Img',
        ];
    }
}
