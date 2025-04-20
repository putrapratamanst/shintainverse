<?php

use yii\db\Migration;

class m250418_165731_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('staff', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'expertise' => $this->text()->notNull(),
            'education' => $this->text()->notNull(),
            'profile' => $this->text()->notNull(),
            'is_active' => $this->boolean()->defaultValue(1),
            'is_deleted' => $this->boolean()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250418_165731_staff_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250418_165731_staff_table cannot be reverted.\n";

        return false;
    }
    */
}
