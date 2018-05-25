<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordered_books".
 *
 * @property int $orders_id
 * @property int $books_id
 *
 * @property Books $books
 * @property Orders $orders
 */
class OrderedBooks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordered_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orders_id', 'books_id'], 'integer'],
            [['books_id'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['books_id' => 'id']],
            [['orders_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['orders_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orders_id' => 'Orders ID',
            'books_id' => 'Books ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasOne(Books::className(), ['id' => 'books_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::className(), ['id' => 'orders_id']);
    }
}
