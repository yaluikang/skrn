<?php

namespace app\models;
use app\models\MovieDirectors;
use Yii;
use yii\db\ActiveRecord;

class Movies extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Movies';
    }

    public function getDirectors()
    {
        return $this->hasMany(Directors::class, ['Id' => 'Director_id'])->viaTable('Movie_has_directors', ['Movie_id' => 'Id']);
    }

    public function getActors()
    {
        return $this->hasMany(Actors::class, ['Id' => 'Actor_id'])->viaTable('Movie_has_actors', ['Movie_id' => 'Id']);
    }

    public function getGenres()
    {
        return $this->hasMany(Genres::class, ['Id' => 'Genre_id'])->viaTable('Movies_has_genres', ['Movie_id' => 'Id']);
    }
}