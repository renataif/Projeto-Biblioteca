<?php

use app\models\Editora;
use app\models\Livro;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExemplarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exemplares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exemplar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Novo Exemplar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'edicao',
            'numpaginas',
            'anopublicacao',
            [
                'attribute'=>'livro.nome',
                'label'=>'Livro',
                'filter' => Html::activeDropDownList($searchModel, 'livro.nome', ArrayHelper::map(Livro::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Selecione um Livro']),

            ],
            [
                'attribute'=>'editora.nome',
                'label'=>'Editora',
                'filter' => Html::activeDropDownList($searchModel, 'editora.nome', ArrayHelper::map(Editora::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Selecione uma Editora']),
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'delete' => function($url, $model){
                        return Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>', 
                            ['delete', 'id' => $model->id], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'Você deseja excluir esse Autor?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
