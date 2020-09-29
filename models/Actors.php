<?php


namespace app\models;


use yii\db\ActiveRecord;

class Actors extends ActiveRecord
{
    public static function tableName ()
    {
        return 'Actors';
    }

    public function getMovies()
    {
        return $this->hasMany(Movies::class, ['Id' => 'Movie_id'])->viaTable('Movie_has_actors', ['Actor_id' => 'Id']);
    }
}