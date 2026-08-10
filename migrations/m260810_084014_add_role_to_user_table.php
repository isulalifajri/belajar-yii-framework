<?php

use yii\db\Migration;

class m260810_084014_add_role_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            '{{%user}}',
            'role',
            $this->string(20)
                ->notNull()
                ->defaultValue('staff')
        );
    }

    public function safeDown()
    {
        $this->dropColumn(
            '{{%user}}',
            'role'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m260810_084014_add_role_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
