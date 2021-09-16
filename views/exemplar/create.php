<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Exemplar */

$this->title = 'Create Exemplar';
$this->params['breadcrumbs'][] = ['label' => 'Exemplars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exemplar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
