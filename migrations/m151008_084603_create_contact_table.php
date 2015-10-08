<?php

use yii\db\Schema;
use yii\db\Migration;

class m151008_084603_create_contact_table extends Migration
{
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'text' => $this->text(),
            'date' => $this->date(),
        ]);
    }

    public function down()
    {
        $this->dropTable('contact');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
