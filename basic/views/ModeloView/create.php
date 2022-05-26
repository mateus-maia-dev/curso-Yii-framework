<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModeloTable */

$this->title = 'Create Modelo Table';
$this->params['breadcrumbs'][] = ['label' => 'Modelo Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelo-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
