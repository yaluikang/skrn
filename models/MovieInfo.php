<?php


namespace app\models;


use yii\db\QueryBuilder;

class MovieInfo extends QueryBuilder
{
    /*public function getInfoForMovie( $id )
    {
        //Вызвать функцию, которая соберет все воедино
        //Отдать json-obj по фильму
    }*/

    public static function getGenres( $id )
    {
        //Найти жанры по id и отдать в виде ассоциативного массива
    }

    public static function getActors( $id )
    {
        //Найти актеров по id фильма и отдать в виде ассоциативного массива
    }

    public static function getDirectors( $id )
    {
        //Найти продюссера по id фильма и отдать в виде ассоциативного массива
        $movie = Movies::findOne($id);
        $directors = $movie->directors;
        $directorsone = $directors[0]->Name;
        echo( $directorsone );
    }

    public static function getTheMainInfo( $id )
    {

    }
}