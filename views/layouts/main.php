<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
    <link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
    <link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css">
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<header id="masthead-pro">
    <div class="container">

        <h1><a href="index.html"><img src="images/logo.png" alt="Logo"></a></h1>

        <nav id="site-navigation-pro">
            <ul class="sf-menu">
                <li class="normal-item-pro current-menu-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="normal-item-pro">
                    <a href="dashboard-home.html">New Releases</a>
                    <!-- Sub-Menu Example >
                    <ul class="sub-menu">
                        <li class="normal-item-pro">
                            <a href="#!">Sub-menu item 1</a>
                        </li>
                        <li class="normal-item-pro">
                            <a href="#!">Sub-menu item 2</a>
                        </li>
                        <li class="normal-item-pro">
                            <a href="#!">Sub-menu item 3</a>
                        </li>
                    </ul>
                    < End Sub-Menu example -->
                </li>
                <li class="normal-item-pro">
                    <a href="signup-step1.html">Pricing Plans</a>
                </li>
                <li class="normal-item-pro">
                    <a href="faqs.html">FAQs</a>
                </li>
            </ul>
        </nav>

        <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>

        <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>

        <div class="clearfix"></div>
    </div><!-- close .container -->

    <nav id="mobile-navigation-pro">

        <ul id="mobile-menu-pro">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="dashboard-home.html">New Releases</a>
                <!-- Mobile Sub-Menu Example >
                <ul>
                    <li class="normal-item-pro">
                        <a href="#!">Sub-menu item 1</a>
                    </li>
                    <li class="normal-item-pro">
                        <a href="#!">Sub-menu item 2</a>
                    </li>
                    <li class="normal-item-pro">
                        <a href="#!">Sub-menu item 3</a>
                    </li>
                </ul>
                < End Mobile Sub-Menu Example -->
            </li>
            <li>
                <a href="signup-step1.html">Pricing Plans</a>
            </li>
            <li>
                <a href="faqs.html">FAQs</a>
            </li>
        </ul>
        <div class="clearfix"></div>

        <button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>

    </nav>
</header>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
