<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Pessoa
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property PessoaFisica $pessoaFisica
 */
class Pessoa extends ActiveRecord
{


    public function rules()
    {
        return [
            [['nome', 'email'], 'required'],
            ['nome', 'string', 100],
            [['email', 'string'], 100],
        ];
    }

    public function getPessoaFisica()
    {
        return $this->hasOne(PessoaFisica::class, ['pessoa_id' => 'id']);
    }
}
