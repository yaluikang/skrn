<?php


namespace app\models;


use yii\db\ActiveRecord;
use app\models\MovieDirectors;
use app\models\Movies;

class Directors extends ActiveRecord
{

    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Directors';
    }

    public function getMovies()
    {
        return $this->hasMany(Movies::class, ['Id' => 'Movie_id'])->viaTable('Movie_has_directors', ['Director_id' => 'Id']);
    }
}