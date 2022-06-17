<?php

use yii\db\Migration;

/**
 * Class m220617_134924_create_categoria
 */
class m220617_134924_create_categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('categorias', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'data_cadastro' => $this->dateTime()->notNull()
        ]);

        // apos a tabela ser criada, eu ainda posso inserir algum valor nela
        $this->insert('categorias', [
            'nome' => 'Categoria Padrão',
            'data_cadastro' => date('Y-m-d, H:i:s')
        ]);
    }

    public function down()
    {
        $this->dropTable('categorias');
    }
}
