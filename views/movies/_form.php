<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MoviesHasGenres */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-has-genres-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Movie_id')->textInput() ?>

    <?= $form->field($model, 'Genre_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
