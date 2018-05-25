<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $price
 *
 * @property OrderedBooks[] $orderedBooks
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'author', 'price'], 'required'],
            [['price'], 'number'],
            [['title'], 'string', 'max' => 191],
            [['author'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderedBooks()
    {
        return $this->hasMany(OrderedBooks::className(), ['orderedbooks_id' => 'id']);
    }
}
