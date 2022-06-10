<?php

namespace app\modules\financeiro;

use yii;
use yii\base\Module;

class FinanceiroModule extends Module
{

    // aqui eu vou modificar o metodo nativo init()
    public function init()
    {
        parent::init();

        // carregando um arquivo de configuração
        Yii::configure($this, require(__DIR__ . '/config/main.php'));

        // $this->params['nome'] = 'Mateus';
        // $this->params['sobrenome'] = 'Maia';
    }
}
