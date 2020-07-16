<?php

namespace app\models;
use app\models\MovieHasDirectorsRecord;
use Yii;
use yii\db\ActiveRecord;

class MoviesRecord extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Movies';
    }

    public function getMovieHasDirectors()
    {
        return $this->hasMany(MovieHasDirectorsRecord::class, ['Id' => 'Movie_id']);
    }
}