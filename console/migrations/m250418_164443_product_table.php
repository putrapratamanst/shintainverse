<?php

use yii\db\Migration;

class m250418_164443_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string(),
            'is_active' => $this->boolean()->defaultValue(1),
            'is_deleted' => $this->boolean()->defaultValue(0),
            'meta_title' => $this->string(),
            'meta_description' => $this->text(),
            'meta_keywords' => $this->text(),
            'meta_image' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250418_164443_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250418_164443_product_table cannot be reverted.\n";

        return false;
    }
    */
}
