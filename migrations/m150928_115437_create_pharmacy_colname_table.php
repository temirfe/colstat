<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_115437_create_pharmacy_colname_table extends Migration
{
    public function up()
    {
        $this->createTable('pharmacy_colname', [
            'id' => $this->primaryKey(),
            'name' => $this->string('100')->notNull(),
            'city' => $this->string('100')->notNull(),
            'state' => $this->string('100')->notNull(),
            'contact' => $this->string('100')->notNull(),
            'pharm_school_name' => $this->string('100')->notNull(),
            'accred_status' => $this->string('100')->notNull(),
            'inst_type' => $this->string('100')->notNull(),
            'main_campus' => $this->string('100')->notNull(),
            'branch_campuses' => $this->string('100')->notNull(),
            'curriculum' => $this->string('100')->notNull(),
            'addit_reqs' => $this->string('100')->notNull(),
            'prereq_courses' => $this->string('100')->notNull(),
            'enter_class_stat' => $this->string('100')->notNull(),
            'appl_process_reqs' => $this->string('100')->notNull(),
        ]);

        $this->createIndex('idx_pharmacy_colname_name', 'pharmacy_colname', 'name');
    }

    public function down()
    {
        $this->dropTable('pharmacy_colname');
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
