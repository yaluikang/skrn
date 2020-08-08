<?php

namespace app\controllers;

use app\models\Directors;
use app\models\MovieDirectors;
use app\models\MovieInfo;
use app\models\Movies;
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
        $movieInfo = Movies::findOne($id);
        return $this->render('dashboard-movie-profile', ['movieInfo' => $movieInfo]);
    }

    public function actionTest()
    {
        $movie = Movies::findOne(1);
        $actors = $movie->actors;
        //$actorsone = ;
        echo json_encode( $actors,JSON_UNESCAPED_UNICODE );
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
