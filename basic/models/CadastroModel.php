<?php

namespace app\models;

use yii\base\Model;

// Esse modelo não faz nenhuma ligação com o banco de dados
// por isso vai estender a classe MOdel
class CadastroModel extends Model
{
    // declarando os campos
    public $nome;
    public $email;
    public $idade;

    // validação dos campos
    public function rules()
    {
        return [
            [['nome', 'email', 'idade'], 'required'],
            ['email', 'email'], // email do tipo email
            ['idade', 'number', 'integerOnly' => true] // idade do tipo number e apenas inteiro
        ];
    }

    // atribuição as Labels
    public function attributesLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade'
        ];
    }
}
