<?php

namespace app\module\api\controllers;

use yii\rest\ActiveController;

class DefaultController extends ActiveController
{
    public $modelClass = 'app\models\Noticia';

    // se eu quiser remover alguma ação do usuário
    // removendo delete e create
    public function actions()
    {
        $actions = parent::actions();

        unset($actions['delete'], $actions['create']);

        return $actions;
    }
}
