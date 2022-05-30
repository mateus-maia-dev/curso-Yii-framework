<?php

// eu preciso dar esse nome do "caminho" para encontrar esse arquivo
namespace app\classes\widgets;

use yii\base\Widget;
use yii\helpers\Html;


class HelloWidget extends Widget
{
    public $message;
    public $submessage;

    // de cara, eu vou precisar sobreescrever os método init() e run() da classe Widget

    // alimenta as propriedades do widget
    public function init()
    {
        parent::init();

        if ($this->message === null) {
            $this->message = 'Hello World!';
        }

        if ($this->submessage === null) {
            $this->submessage = "I'm here!";
        }
    }

    // faz a renderização
    public function run()
    {
        // $output = "<h2>" . Html::encode($this->message) . "</h2>";
        // $output .= "<p>" . Html::encode($this->message) . "</p>";

        // return $output;

        //renderizando widget atraves de view
        return $this->render('hello', [
            'message' => $this->message,
            'submessage' => $this->submessage
        ]);
    }
}
