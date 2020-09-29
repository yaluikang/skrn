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

    public function getMovies()
    {
        return $this->hasMany(Movies::class, ['Genre_id' => 'Id'])->viaTable('Movies_has_genres', ['Id' => 'Movie_id']);
    }

    public static function searchByGenre()
    {
        $movies = Genres::find()->where(['Name'=>'боевик']);
        return (($movies->movies)[0])->Name;
    }
}
