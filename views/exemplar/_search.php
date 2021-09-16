<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExemplarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exemplar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'edicao') ?>

    <?= $form->field($model, 'numpaginas') ?>

    <?= $form->field($model, 'anopublicacao') ?>

    <?= $form->field($model, 'livro_id') ?>

    <?php // echo $form->field($model, 'editora_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
