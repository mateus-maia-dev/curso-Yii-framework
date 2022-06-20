<?php

use yii\grid\GridView;

$this->title = "Mu Yii Application";
?>

<div class="jumbotron">
    <h1>Tamanhos</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'id',
                'header' => 'Cód.',
                'headerOptions' => [
                    'style' => 'text-align: right; width: 70px;'
                ],
                'contentOptions' => [
                    'style' => 'text-align: right;'
                ]
            ],
            'created_at',
            [
                'attribute' => 'name',
                'content' => function (\app\models\Size $model, $key, $index, $column) {
                    return $model->name . "({$model->abbreviation}) . $key . $index ";
                }
            ]


            // 'abbreviation',
            // 'name'
        ]
    ]); ?>
</div>