<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sizes".
 *
 * @property int $id
 * @property string $name
 * @property string|null $abbreviation
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sizes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'abbreviation'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Name',
            'abbreviation' => 'Abreviação',
            'status' => 'Status',
            'created_at' => 'Criado em',
            'updated_at' => 'Atualizado em',
        ];
    }
}
