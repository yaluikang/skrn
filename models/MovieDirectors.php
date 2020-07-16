<?php


namespace app\models;

use app\models\Movies;
use yii\db\ActiveRecord;

class MovieDirectors extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Movie_has_directors';
    }

    /*public function getMoviesRecord()
    {
        return $this->hasMany(Movies::class, ['Id' => 'Movie_id']);
    }

    public function getDirectorsRecord()
    {
        return $this->hasMany(Directors::class, ['Id' => 'Director_id']);
    }*/
}