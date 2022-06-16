<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;

class FormatterController extends Controller
{
    public function actionIndex()
    {
        $appLang = Yii::$app->language;

        // criando uma instancia do formatter
        $formatter = Yii::$app->formatter;

        echo "<h2>{$appLang}</h2>";

        // ainda dá para criar um component em uma classe
        echo "<p>Percentuais: {$formatter->asPercent(0.1231241)}</p>";
        echo "<p>Booleans: {$formatter->asBoolean(true)}</p>";
        echo "<p>Datas Formato: {$formatter->asDate("2016-03-20", "dd/MM/YYYY")}</p>";
        echo "<p>Datas: {$formatter->asDate("2016-03-20", 'full')}</p>";
        echo "<p>NText: {$formatter->asNtext("Mateus\nMaia\nFonseca")}</p>";
        echo "<p>E-mails: {$formatter->asEmail("eng.fonsecamateus@gmail.com")}</p>";
    }
}
