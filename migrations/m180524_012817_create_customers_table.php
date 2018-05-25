<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customers`.
 */
class m180524_012817_create_customers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey(),
            'name' => $this->string(191)->notNull(),
            'shipping_address' => $this->string(191)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customers');
    }
}
