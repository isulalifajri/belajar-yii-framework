<?php

use yii\db\Migration;

class m260810_084619_set_admin_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update(
            '{{%user}}',
            ['role' => 'admin'],
            ['username' => 'admin']
        );
    }

    public function safeDown()
    {
        $this->update(
            '{{%user}}',
            ['role' => 'staff'],
            ['username' => 'admin']
        );
    }
}
