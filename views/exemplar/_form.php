<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Exemplar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exemplar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'edicao')->textInput() ?>

    <?= $form->field($model, 'numpaginas')->textInput() ?>

    <?= $form->field($model, 'anopublicacao')->textInput() ?>

    <?= $form->field($model, 'livro_id')->textInput() ?>

    <?= $form->field($model, 'editora_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
