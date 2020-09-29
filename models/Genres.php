<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Genres".
 *
 * @property int $Id
 * @property string $Name
 */
class Genres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Name'], 'required'],
            [['Id'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['Id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
        ];
    }
}
