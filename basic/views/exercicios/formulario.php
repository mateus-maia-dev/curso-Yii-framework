<h2>Formulario Cadastro - Yii Framework</h2>
<hr>

<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>

<!-- abre o formulario -->
<?php $form = ActiveForm::begin() ?>
<!-- Os nomes devem ser os mesmos declarados na model -->
<?= $form->field($model, 'nome') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'idade') ?>

<!-- botao de submit -->
<div class="form-group">
    <!-- caso queira adicionar alguma classe de estilo, passa como segundo parametro no array -->
    <?= Html::submitButton('Enviar Dados', ['class' => 'btn btn-primary']) ?>
</div>


<!-- fecha o formulário -->


<?php ActiveForm::end() ?>