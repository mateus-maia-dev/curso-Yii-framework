<?php

namespace app\controllers;

use yii\base\Controller;
use yii\filters\AccessControl;

class FilterController extends Controller
{
    public function behaviors()
    {
        return [
            // nome do filtro no controlador
            // ver na documentação as propriedades que podem ser utilizadas
            'acess' => [
                'class' => AccessControl::class,
                // 'except' => ['create'],
                'only' => ['create', 'update'],
                'rules' => [
                    ['allow' => false]
                ]

            ]
        ];
    }

    public function actionIndex()
    {
        return 'Listagem';
    }

    public function actionCreate()
    {
        return 'Novo';
    }

    public function actionUpdate()
    {
        return 'Atualizar';
    }

    public function actionDelete()
    {
        return 'Deletar';
    }
}
