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

    public function getDirectorsR()
    {
        return $this->hasMany(Directors::class, ['Id' => 'Director_id'])->viaTable('Movie_has_directors', ['Movie_id' => 'Id']);
    }
}