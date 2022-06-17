<?php

use yii\db\Migration;

/**
 * Class m220617_144144_create_produtos
 */
class m220617_144144_create_produtos extends Migration
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
        echo "m220617_144144_create_produtos cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('produtos', [
            'id' => $this->primaryKey(),
            'categoria_id' => $this->integer()->notNull(),
            'data_cadastro' => $this->dateTime()->notNull(),
            'nome' => $this->string(60),
            'descricao' => $this->text(),
            'valor' => $this->decimal(10, 2)->notNull(),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1)
        ]);

        // adicionando a foreign_key
        $this->addForeignKey('fk_produtos_categoria_id', 'produtos', 'categoria_id', 'categorias', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropForeignKey('fk_produtos_categoria_id', 'produtos');
        $this->dropTable('produtos');
    }
}
