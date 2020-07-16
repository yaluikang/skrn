<?php


namespace app\models;

use app\models\MoviesRecord;

class MovieHasDirectors
{
    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Movie_has_directors';
    }

    public function getMovies()
    {
        return $this->hasMany(MoviesRecord::className(), ['Movie_id' => 'Id']);
    }
}