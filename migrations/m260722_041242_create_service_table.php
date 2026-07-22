<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m260722_041242_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),

            'name' => $this->string(100)->notNull(),

            'price' => $this->decimal(10,2)->notNull(),

            'duration' => $this->integer()->notNull(),

            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),

            'updated_at' => $this->timestamp()
                ->defaultExpression('CURRENT_TIMESTAMP')
                ->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
