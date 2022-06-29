<?php

namespace app\models;

use yii\db\ActiveRecord;


/**
 * definindo doc para facilitar
 * Class Cargo
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property Funcionario[] $funcionarios
 */
class Cargo extends ActiveRecord
{
    public static function tableName()
    {
        return 'cargos';
    }

    public function rules()
    {
        return [
            ['nome', 'required'],
            ['nome', 'string', 'max' => 100]
        ];
    }

    public function getFuncionarios()
    {
        // SQL
        // SELECT * FROM 'cargos' AS 'c'
        // INNER JOIN 'funcionarios' as 'f' on 'f'.'cargo_id' = 'c'
        return $this->hasMany(Funcionario::class, ['cargo_id' => 'id']);
    }
}
