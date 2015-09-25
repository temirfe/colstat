<?php

use yii\db\Schema;
use yii\db\Migration;

class m150920_043948_create_colname_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('colname', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string()->notNull(),
            'zip' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'fax' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'president' => $this->string()->notNull(),
            'url_fin_aid' => $this->string()->notNull(),
            'url_admissions' => $this->string()->notNull(),
            'url_apply' => $this->string()->notNull(),
            'grad_rate' => $this->string()->notNull(),
            'grad_rate_men' => $this->string()->notNull(),
            'grad_rate_women' => $this->string()->notNull(),
            'apply_fee' => $this->string()->notNull(),
            'about' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_colname_name', 'colname', 'name');
    }

    public function down()
    {
        $this->dropTable('colname');
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
