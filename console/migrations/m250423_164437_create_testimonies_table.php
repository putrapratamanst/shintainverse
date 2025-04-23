<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonies}}`.
 */
class m250423_164437_create_testimonies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%testimonies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'role' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%testimonies}}');
    }
}
