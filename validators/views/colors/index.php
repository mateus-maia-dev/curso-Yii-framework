<?php

use yii\grid\GridView;

$this->title = "Mu Yii Application";
?>

<div class="jumbotron">
    <h1>Tamanhos</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'created_at',
            'abbreviation',
            'name'
        ]
    ]); ?>
</div>