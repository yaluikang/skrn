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
        $class = new MoviesRecord();
        return $this->hasMany(get_class($class), ['Movie_id' => 'Id']);
    }
}