<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m180524_022410_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'customers_id' => $this->integer(),
        ]);
        $this->createIndex('idx-orders-customers_id','orders','customers_id');

        $this->addForeignKey(
            'fk-orders-customers',
            'orders','customers_id',
            'customers','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-orders-customers','orders');
        $this->dropIndex('idx-orders-customers_id', 'orders');
        $this->dropTable('orders');
    }
}
