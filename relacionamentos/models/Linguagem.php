<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class ProgramadorLinguagem
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property ProgramadorLinguagem[] $programadorLinguagens
 * @property Programador[] $programadores
 */
class Linguagem extends ActiveRecord
{
    public static function tableName()
    {
        // nome da tabela no banco de dados
        return 'linguagens';
    }

    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 100],
        ];
    }

    public function getProgramadorLinguagens()
    {
        return $this->hasMany(ProgramadorLinguagem::class, ['linguagem_id' => 'id']);
    }

    public function getProgramadores()
    {
        // a partir da tabela programador, eu consigo acessar a tabela lingugagens
        // utilizando o método viaTable()
        return $this->hasMany(Linguagem::class, ['id' => 'programador_id'])
            ->viaTable(ProgramadorLinguagem::tableName(), ['linguagem_id' => 'id']);
    }
}
