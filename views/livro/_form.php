<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Livro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="livro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ano_obra')->textInput() ?>

    <?= $form->field($model, 'sinopse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classificacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
