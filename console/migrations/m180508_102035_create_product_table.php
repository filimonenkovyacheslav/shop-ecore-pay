<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180508_102035_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->varchar(255),
            'price' => $this->decimal(15,2),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
