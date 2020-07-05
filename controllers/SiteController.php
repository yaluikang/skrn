<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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

}
