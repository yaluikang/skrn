<?php

namespace app\controllers;

use app\models\MovieDirectors;
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
        return $this->render('dashboard-movie-profile');
    }

    public function actionTest()
    {
        $movie = Movies::find()
            ->where(['id' => 1])
            ->one()
            ->asArray();
        //$directors = $movie->directors->asArray();
        echo json_encode( $movie,JSON_UNESCAPED_UNICODE );
    }

}
