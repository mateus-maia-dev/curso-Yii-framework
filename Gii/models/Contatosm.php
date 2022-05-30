<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contatos".
 *
 * @property int $id
 * @property string $nome
 * @property string|null $email
 * @property string|null $cidade
 * @property string|null $estado
 */
class Contatosm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome', 'email', 'cidade', 'estado'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
        ];
    }
}
