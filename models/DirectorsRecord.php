<?php


namespace app\models;


class DirectorsRecord
{

    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Directors';
    }

    public function getMovieHasDirectorsRecord()
    {
        return $this->hasMany(MovieHasDirectorsRecord::class, ['Director_id' => 'Id']);
    }
}