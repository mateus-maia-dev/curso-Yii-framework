<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class ProgramadorLinguagem
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property string $github
 * @property ProgramadorLinguagem[] $programadorLinguagens
 * @property Linguagem[] $linguagens
 */
class Programador extends ActiveRecord
{
    public static function tableName()
    {
        // nome da tabela no banco de dados
        return 'programadores';
    }

    public function rules()
    {
        return [
            [['nome', 'github'], 'required'],
            [['nome'], 'string', 100],
            [['github'], 'string', 100],

        ];
    }

    public function getProgramadorLinguagens()
    {
        return $this->hasMany(ProgramadorLinguagem::class, ['programador_id' => 'id']);
    }

    public function getLinguagens()
    {
        // a partir da tabela programador, eu consigo acessar a tabela lingugagens
        // utilizando o método viaTable()
        return $this->hasMany(Linguagem::class, ['id' => 'linguagem_id'])
            ->viaTable(ProgramadorLinguagem::tableName(), ['programador_id' => 'id']);
    }
}
