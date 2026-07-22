<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%booking}}`.
 */
class m260722_041512_create_booking_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('{{%booking}}', [

            'id' => $this->primaryKey(),

            'customer_name' => $this->string(100)->notNull(),

            'barber_id' => $this->integer()->notNull(),

            'service_id' => $this->integer()->notNull(),

            'booking_date' => $this->date()->notNull(),

            'booking_time' => $this->time()->notNull(),

            'status' => $this->string(20)->defaultValue('Pending'),

            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),

            'updated_at' => $this->timestamp()
                ->defaultExpression('CURRENT_TIMESTAMP')
                ->append('ON UPDATE CURRENT_TIMESTAMP'),

        ]);

        $this->addForeignKey(
            'fk_booking_barber',
            'booking',
            'barber_id',
            'barber',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk_booking_service',
            'booking',
            'service_id',
            'service',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_booking_barber', 'booking');
        $this->dropForeignKey('fk_booking_service', 'booking');

        $this->dropTable('{{%booking}}');
    }
}
