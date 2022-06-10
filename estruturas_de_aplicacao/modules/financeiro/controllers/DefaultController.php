<?php

namespace app\modules\financeiro\controllers;

use yii\base\Controller;

// para acesso ao controller -> http://localhost/?r=ModuleID/ControlerID/actionID
class DefaultController extends Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }
}
