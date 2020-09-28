<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MoviesHasGenres */

$this->title = 'Create Movies Has Genres';
$this->params['breadcrumbs'][] = ['label' => 'Movies Has Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-has-genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
