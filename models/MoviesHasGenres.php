<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movies_has_genres".
 *
 * @property int $Movie_id
 * @property int $Genre_id
 */
class MoviesHasGenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Movies_has_genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Movie_id', 'Genre_id'], 'required'],
            [['Movie_id', 'Genre_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Movie_id' => 'Movie ID',
            'Genre_id' => 'Genre ID',
        ];
    }
}
