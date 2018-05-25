<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books`.
 */
class m180523_035633_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'title' => $this->string(191)->notNull(),
            'author' => $this->string(200)->notNull(),
            'price' => $this->money()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('books');
    }
}
