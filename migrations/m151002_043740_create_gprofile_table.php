<?php

use yii\db\Schema;
use yii\db\Migration;

class m151002_043740_create_gprofile_table extends Migration
{
    public function up()
    {
        $this->createTable('gprofile', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer()->notNull(),
            'gender' =>$this->string('10')->notNull(),
            'ethnicity' =>$this->string('50')->notNull(),
            'appl_cycle_year' =>$this->string('50')->notNull(),
            'undergrad_inst' =>$this->string()->notNull(),
            'major' =>$this->string('50')->notNull(),
            'degree_awarded' =>$this->string('20')->notNull(),
            'gpa' =>$this->string('20')->notNull(),
            'class_rank' =>$this->string('50')->notNull(),
            'work_exp' =>$this->string('50')->notNull(),
            'study_abroad_exp' =>$this->string()->notNull(),
            'extracur' =>$this->text(),
            'leadership_roles' =>$this->text(),
            'honors' =>$this->text(),
            'additional_info' =>$this->text(),
            'int_applicant' =>$this->integer()->notNull(),
        ]);

        $this->createIndex('idx_gprofile_user_id', 'gprofile', 'user_id');
    }

    public function down()
    {
        $this->dropTable('gprofile');
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
