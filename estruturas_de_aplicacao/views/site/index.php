<?php

/** @var yii\web\View $this */

use app\classes\widgets\HelloWidget;
use app\classes\widgets\HelloWorldBeginEndWidget;
use yii\helpers\Html;
use yii\jui\DatePicker;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <!-- importação de WIDGETS -->
    <div>
        <?= HelloWidget::widget([
            'message' => 'Olá mundo!',
            'submessage' => 'Olá mundo! Eu estou aqui!'
        ]) ?>

        <?php HelloWorldBeginEndWidget::begin() ?>
        <h2>Curso de Yii 2 framework</h2>
        <h3>Esse é mais puxado que o anterior</h3>

        <?php HelloWorldBeginEndWidget::end() ?>
    </div>

    <div>
        <?= DatePicker::widget([
            'name' => 'data_venda',
            'language' => 'pt',
            'dateFormat' => 'dd/MM/yyyy'
        ]) ?>
    </div>

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations! <?= ' ' . $nome . ' ' . $sobrenome ?></h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>