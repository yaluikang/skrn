<?php


namespace app\models;


use yii\db\ActiveRecord;
use app\models\MovieDirectors;

class Directors extends ActiveRecord
{

    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Directors';
    }

    /*public function getMovieHasDirectorsRecord()
    {
        return $this->hasMany(MovieDirectors::class, ['Director_id' => 'Id']);
    }*/
}