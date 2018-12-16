<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181210_204151_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string()->defaultValue(null),
            'password' => $this->string(),
            'isAdmin' => $this->integer()->defaultValue(0),
            'photo' => $this->string()->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('user');
    }
}
