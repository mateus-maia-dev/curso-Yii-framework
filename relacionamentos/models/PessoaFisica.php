<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class PessoaFisica
 * @package app\models
 * 
 * @property int $pessoa_id
 * @property string $cpf
 * @property string $sexo
 * @property Pessoa $pessoa
 * 
 */

class PessoaFisica extends ActiveRecord
{
    // não é necessário criar a função tableName, pois o nome da Model é
    // o mesmo da tabela

    public function rules()
    {
        return [
            [['pessoa_id', 'cpf'], 'required'],
            ['pessoa_id', 'integer'],
            ['cpf', 'string', 100],
            ['pessoa_id', 'unique']

        ];
    }

    public function getPessoa()
    {
        // referenciando a chave estrangeira pessoa_id
        return $this->hasOne(Pessoa::class, ['id' => 'pessoa_id']);
    }
}
