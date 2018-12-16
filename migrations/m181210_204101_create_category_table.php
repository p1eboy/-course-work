<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m181210_204101_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('category');
    }
}
