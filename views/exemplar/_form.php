<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Livro;
use app\models\Editora;

/* @var $this yii\web\View */
/* @var $model app\models\Exemplar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exemplar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'edicao')->textInput() ?>

    <?= $form->field($model, 'numpaginas')->textInput() ?>

    <?= $form->field($model, 'anopublicacao')->textInput() ?>

    <?= $form->field($model, 'livro_id')->
       dropDownList(ArrayHelper::map(Livro::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um Livro'] )
    ?>


    <?= $form->field($model, 'editora_id')->
       dropDownList(ArrayHelper::map(Editora::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione uma Editora'] )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
