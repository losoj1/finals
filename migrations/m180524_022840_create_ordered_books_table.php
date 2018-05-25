<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ordered_books`.
 */
class m180524_022840_create_ordered_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ordered_books', [
            'orders_id' => $this->integer(),
            'books_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-ordered_books-books_id',
            'ordered_books','books_id');
        $this->addForeignKey(
            'fk-ordered_books-books',
            'ordered_books','books_id',
            'books','id'
        );
        $this->createIndex(
            'idx-ordered_books-orders_id',
            'ordered_books','orders_id'
        );
        $this->addForeignKey(
            'fk-ordered_books-orders',
            'ordered_books','orders_id',
            'orders','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-ordered_books-books', 'ordered_books');
        $this->dropForeignKey('fk-ordered_books-orders', 'ordered_books');
        $this->dropIndex('idx-ordered_books-books_id', 'ordered_books');
        $this->dropIndex('idx-ordered_books-orders_id', 'ordered_books');
        $this->dropTable('ordered_books');
    }
}
