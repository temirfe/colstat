<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_115405_create_pharmacy_table extends Migration
{
    public function up()
    {
        $this->createTable('pharmacy', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string('20')->notNull(),
            'contact' => $this->string('500')->notNull(),
            'pharm_school_name' => $this->string()->notNull(),
            'accred_status' => $this->string('20')->notNull(),
            'inst_type' =>$this->string('20')->notNull(),
            'main_campus' =>$this->string('100')->notNull(),
            'branch_campuses' =>$this->string()->notNull(),
            'curriculum' =>$this->text(),
            'addit_reqs' =>$this->text(),
            'prereq_courses' =>$this->text(),
            'enter_class_stat' =>$this->string('500')->notNull(),
            'appl_process_reqs' =>$this->text(),
        ]);

        $this->createIndex('idx_pharmacy_name', 'pharmacy', 'name');
        $this->createIndex('idx_pharmacy_state', 'pharmacy', 'state');
    }

    public function down()
    {
        $this->dropTable('pharmacy');
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
