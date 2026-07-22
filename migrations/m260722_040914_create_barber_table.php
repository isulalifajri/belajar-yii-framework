<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%barber}}`.
 */
class m260722_040914_create_barber_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%barber}}', [
            'id' => $this->primaryKey(),

            'name' => $this->string(100)->notNull(),

            'phone' => $this->string(20),

            'experience' => $this->integer()->defaultValue(0),

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
        $this->dropTable('{{%barber}}');
    }
}
