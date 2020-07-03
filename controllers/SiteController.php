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
    public function actionIndex()
    {
        return $this->render('home');
    }

    public function actionDashboardHome()
    {
        /*return $this->render('dashboard-home');*/
        echo 'dashboard-home';
    }

    public function actionFaqs()
    {
        return $this->render('faqs');
    }

    public function actionSignup()
    {
        return $this->render('signup');
    }
}
