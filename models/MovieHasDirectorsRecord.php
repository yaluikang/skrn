<?php


namespace app\models;

use app\models\MoviesRecord;
use yii\db\ActiveRecord;

class MovieHasDirectorsRecord extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName ()
    {
        return 'Movie_has_directors';
    }

    public function getMoviesRecord()
    {
        return $this->hasMany(MoviesRecord::class, ['Id' => 'Movie_id']);
    }
}