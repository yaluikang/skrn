<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use app\models\MovieHasDirectors;

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
        return $this->hasMany(MovieHasDirectors::class(), ['Id' => 'Movie_id']);
    }
}