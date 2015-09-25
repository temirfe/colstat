<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_090627_create_schooltype_table extends Migration
{
    public function up()
    {
        $this->createTable('schooltype', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'table_name' => $this->string()->notNull(),
        ]);

        $this->createIndex('idx_schooltype_title', 'schooltype', 'title');
    }

    public function down()
    {
        $this->dropTable('schooltype');
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
