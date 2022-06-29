<?php

namespace app\models;

use yii\db\ActiveRecord;


/**
 * definindo doc para facilitar
 * Class Cargo
 * @package app\models
 * 
 * @property int $id
 * @property int $cargo_id
 * @property string $nome
 * @property Cargo $cargo
 */

class Funcionario extends ActiveRecord
{
    // se o nome da tabela no banco fosse igual ao Model, não precisaria dessa função
    public static function tableName()
    {
        return 'funcionarios';
    }

    public function rules()
    {
        return [
            [['nome', 'cargo_id'], 'required'],
            [['cargo_id'], 'integer'],
            ['nome', 'string', 'max' => 100]
        ];
    }

    public function getCargo()
    {
        // SQL
        // SELECT * FROM 'funcionarios' AS 'c'
        // INNER JOIN 'cargos' as 'c' on 'c'.id 'f'.cargo = 'c'


        return $this->hasOne(Cargo::class, ['id' => 'cargo_id']);
    }
}
