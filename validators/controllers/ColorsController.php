<?php

namespace app\controllers;

use app\models\Size;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ColorsController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ]
            ]
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ]
        ];
    }

    public function actionIndex()
    {
        $query = Size::find()->where(['status' => 1]);

        // configurando o dataProvider
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3
            ],
            'sort' => [
                'defaultOrder' => ['name' => SORT_ASC]
            ]
        ]);

        return $this->render('index', [
            // a chave tem que ser o mesmo nome da variável lá na view
            'dataProvider' => $dataProvider
        ]);
    }
}
