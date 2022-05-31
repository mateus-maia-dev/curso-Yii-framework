<?php

namespace app\classes\filters;

use yii\base\ActionFilter;

class TempoAcaoFilter extends ActionFilter
{
    private $start;
    public $message = 'Sua action demorou: ';

    //executado antes da ação
    public function beforeAction($action)
    {
        $this->start = microtime(true);
        return parent::beforeAction($action);
    }

    //executado depois da ação
    public function afterAction($action, $result)
    {
        $time = microtime(true) - $this->start;

        echo "<p>{this->message} {$time} segundos.</p>";

        return parent::afterAction($action, $result);
    }
}
