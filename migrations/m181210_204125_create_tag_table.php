<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tag`.
 */
class m181210_204125_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('tag');
    }
}
