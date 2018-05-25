<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $customers_id
 *
 * @property OrderedBooks[] $orderedBooks
 * @property Customers $customers
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customers_id'], 'integer'],
            [['customers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customers_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customers_id' => 'Customers ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderedBooks()
    {
        return $this->hasMany(OrderedBooks::className(), ['orders_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasOne(Customers::className(), ['id' => 'customers_id']);
    }
}
