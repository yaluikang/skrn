<?php


namespace app\models;


use yii\db\QueryBuilder;

class MovieInfo extends QueryBuilder
{

    public function getInfoForMovie( $id )
    {
        //Вызвать функцию, которая соберет все воедино
        //Отдать json-obj по фильму
        $movieInfo = Movies::findOne($id);
        $movieInfoArr = array();
        $movieInfoArr['Name'] = $movieInfo->Name;
        $movieInfoArr['previewLink'] = $movieInfo->Preview_link;
        $movieInfoArr['posterLink'] = $movieInfo->Poster_link;
        $movieInfoArr['resolution'] = $movieInfo->Resolution;
        $movieInfoArr['ageLimit'] = $movieInfo->Age_limit;
        $movieInfoArr['releaseDate'] = $movieInfo->Release_date;
        $movieInfoArr['length'] = $movieInfo->Length;
        $movieInfoArr['storyline'] = $movieInfo->Storyline;
        $movieInfoArr['directors'] = MovieInfo::getDirectors($id);
        $movieInfoArr['actors'] = MovieInfo::getActors($id);
        //return $movieInfoArr;
        echo json_encode( $movieInfoArr, JSON_UNESCAPED_UNICODE );
    }

    public static function getGenres( $id )
    {
        //Найти жанры по id и отдать в виде ассоциативного массива
    }

    public static function getActors( $id )
    {
        //Найти актеров по id фильма и отдать в виде ассоциативного массива
        $movie = Movies::findOne( $id );
        $count = count( $movie->actors );
        $actors = array();
        for( $i = 0; $i < $count; $i++ )
        {
            $actors[$i] = (($movie->actors)[$i])->Name;
        }
        return $actors;
    }

    public static function getDirectors( $id )
    {
        //Найти продюссера по id фильма и отдать в виде ассоциативного массива
        $movie = Movies::findOne( $id );
        $count = count( $movie->directors );
        $directors = array();
        for( $i = 0; $i < $count; $i++ )
        {
            $directors[$i] = (($movie->directors)[$i])->Name;
        }
        return $directors;
    }

    public static function getTheMainInfo( $id )
    {

    }
}