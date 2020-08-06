<?php


namespace app\models;


use yii\db\ActiveRecord;

class Actors extends ActiveRecord
{
    public function getMovies()
    {
        return $this->hasMany(Movies::class, ['Actor_id' => 'Id'])->viaTable('Movie_has_actors', ['Id' => 'Movie_id']);
    }
}