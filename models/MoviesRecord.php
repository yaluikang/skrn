<?php

namespace app\models;
use app\models\MovieHasDirectorsRecord;
use Yii;
use yii\db\ActiveRecord;

class MoviesRecord extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Movies';
    }

    public function getMovieHasDirectorsRecord()
    {
        return $this->hasMany(MovieHasDirectorsRecord::class, ['Movie_id' => 'Id']);
    }
}