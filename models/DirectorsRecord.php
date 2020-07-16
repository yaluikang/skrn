<?php


namespace app\models;


use yii\db\ActiveRecord;
use app\models\MovieHasDirectorsRecord;

class DirectorsRecord extends ActiveRecord
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