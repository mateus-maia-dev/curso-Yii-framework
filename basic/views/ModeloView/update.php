<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModeloTable */

$this->title = 'Update Modelo Table: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Modelo Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modelo-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
