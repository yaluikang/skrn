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
        return $this->hasMany(Movies::class, ['Director_id' => 'Id'])->viaTable('Movie_has_directors', ['Id' => 'Movie_id']);
    }
}