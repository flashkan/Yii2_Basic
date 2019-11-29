<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activity}}`.
 */
class m191128_221043_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%activity}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'startDay' => $this->date(),
            'endDay' => $this->date(),
            'idAuthor' => $this->bigInteger(),
            'body' => $this->string(),
            'repetition' => $this->boolean(),
            'block' => $this->boolean(),
            'create_at' => $this->date(),
            'update_at' => $this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%activity}}');
    }
}