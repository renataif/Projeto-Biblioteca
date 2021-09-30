<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistoricoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'pagslidas') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'exemplar_id') ?>

    <?= $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
