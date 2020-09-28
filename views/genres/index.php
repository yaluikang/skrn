<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MoviesHasGenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movies Has Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-has-genres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Movies Has Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Movie_id',
            'Genre_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
