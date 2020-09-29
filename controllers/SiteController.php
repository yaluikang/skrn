<?php

namespace app\controllers;

use app\models\Directors;
use app\models\Genres;
use app\models\MovieDirectors;
use app\models\MovieInfo;
use app\models\Movies;
use MP\ImageOptimize\ImageOptimizerService;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = 'main';

    //The main block of site

    //nav menu

    public function actionIndex()
    {
        return $this->render('home');
    }


    public function actionFaqs()
    {
        return $this->render('faqs');
    }

    public function actionSignup()
    {
        return $this->render('signup');
    }

    //The dashboard block of site

    //nav-menu

    public function actionDashboardHome()
    {
        $this->layout = 'dashboard';
        return $this->render('dashboard-home');
    }

    public function actionDashboardMovies()
    {
        $this->layout = 'dashboard';
        return $this->render('dashboard-movies');
    }

    public function actionDashboardPlaylists()
    {
        $this->layout = 'dashboard';
        return $this->render('dashboard-playlists');
    }

    public function actionDashboardNewArrivals()
    {
        $this->layout = 'dashboard';
        return $this->render('dashboard-new-arrivals');
    }

    public function actionDashboardComingSoon()
    {
        $this->layout = 'dashboard';
        return $this->render('dashboard-coming-soon');
    }

    //Movies`s element

    public function actionDashboardMovieProfile( $id )
    {
        $this->layout = 'dashboard';
        $movieInfo = new MovieInfo('skrn');
        $movieInfo = $movieInfo->getInfoForMovie( $id );
        return $this->render('dashboard-movie-profile', ['movieInfo' => $movieInfo]);
        /*
        $movieInfo = Movies::findOne($id);
        return $this->render('dashboard-movie-profile', ['movieInfo' => $movieInfo]);*/
    }

    public function actionTest()
    {
        /*$movieInfo = new MovieInfo('skrn');
        $movieInfo = $movieInfo->getInfoForMovie(1);
        echo json_encode( $movieInfo, JSON_UNESCAPED_UNICODE );*/

        //$movie = Movies::findOne( 1 );
        //$movie = Genres::searchByGenre();

        /*$movies = Genres::findOne(2);
        $movie = (($movies->movies)[0])->Name;*/

        $movie = Genres::findOne(2);

        echo json_encode( (($movie->genres)[0])->Name, JSON_UNESCAPED_UNICODE );
    }

    //Ajax

    public function actionGetactors( $movieid )
    {
        $movie = Movies::findOne( $movieid );
        $count = count( $movie->actors );
        $actors = array();
        for( $i = 0; $i < $count; $i++ )
        {
            $actors[$i] = (($movie->actors)[$i])->Name;
        }
        echo json_encode( $actors, JSON_UNESCAPED_UNICODE );
    }

}
