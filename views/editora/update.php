<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Editora */

$this->title = 'Alterar Editora: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Editoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="editora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
