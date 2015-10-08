<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_102736_create_profile_table extends Migration
{
    /*public function up()
    {
         $this->createTable('profile', [
             'id' => $this->primaryKey(),
             'user_id' =>$this->integer()->notNull(),
             'gender' =>$this->string('10')->notNull(),
             'ethnicity' =>$this->string('50')->notNull(),
             'entering_class' =>$this->string()->notNull(),
             'prospective_major' =>$this->string()->notNull(),
             'high_school' =>$this->string()->notNull(),
             'gpa_unweighted' =>$this->string('20')->notNull(),
             'gpa_weighted' =>$this->string('20')->notNull(),
             'class_rank' =>$this->string('50')->notNull(),
             'class_size' =>$this->string('50')->notNull(),
             'ap_courses_taken' =>$this->text(),
             'ib_student' =>$this->string('50')->notNull(),
             'foreign_languages_taken' =>$this->string('50')->notNull(),
             'years_taken' =>$this->string('50')->notNull(),
             'extracur' =>$this->text(),
             'leadership_roles' =>$this->text(),
             'honors' =>$this->text(),
             'additional_info' =>$this->text(),
             'int_applicant' =>$this->integer()->notNull(),
         ]);

         $this->createIndex('idx_profile_user_id', 'profile', 'user_id');
    }*/

    public function down()
    {
        $this->dropTable('profile');
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
