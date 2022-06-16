<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string|null $assunto
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['assunto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'assunto' => 'Assunto',
        ];
    }

    public function fields()
    {
        return [
            'id',
            'thema' => function (Noticia $model) {
                return ($model->assunto !== '' ? 'Ativo' : 'Inativo');
            },

        ];
    }
}
