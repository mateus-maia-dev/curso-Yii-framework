<?php

namespace app\models;

use yii\base\Model;
use yii\bootstrap4\Modal;

class CadastroModel extends Model
{
    public $nome;
    public $email;
    public $idade;
    public $site;
    public $dataNascimento;
    public $dataInicial;
    public $dataFinal;

    // definindo as regras. Será sobreescrito o método rules()
    // consultando a documentação, vc verá que tem vários tipos de validações..
    // string; email; intenger; url
    public function rules()
    {
        return [
            [['nome', 'email', 'idade', 'site', 'dataNascimento', 'dataInicial', 'dataFinal'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'email' => 'Email',
            'idade' => 'Idade',
            'site' => 'Site/Home Page',
            'dataNascimento' => 'Data de Nascimento',
            'dataInicial' => 'Data de Início',
            'dataFinal' => 'Data do Fim'
        ];
    }
}
