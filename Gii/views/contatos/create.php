<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contatosm */

$this->title = 'Create Contatosm';
$this->params['breadcrumbs'][] = ['label' => 'Contatosms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contatosm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
