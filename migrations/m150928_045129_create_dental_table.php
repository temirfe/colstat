<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_045129_create_dental_table extends Migration
{
    public function up()
    {
        $this->createTable('dental', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string('20')->notNull(),
            'zip' => $this->string('20')->notNull(),
            'phone' => $this->string('20')->notNull(),
            'fax' => $this->string('20')->notNull(),
            'url' => $this->string('20')->notNull(),
            'dean' => $this->string()->notNull(),
            'about' => $this->text(),
            'url_fin_aid' => $this->string()->notNull(),

            'mission' =>$this->text(),
            'first_year_enr' =>$this->text(),
            'curriculum' =>$this->text(),
            'inst_type' =>$this->string('20')->notNull(),
            'since_year' => $this->integer('6')->notNull()->defaultValue(0),
            'term_type' =>$this->string('20')->notNull(),
            'prog_length' =>$this->string('20')->notNull(),
            'sem_start' =>$this->string('20')->notNull(),
            'degr_offered' =>$this->string('20')->notNull(),
            'contact_fin_aid' =>$this->string('500')->notNull(),
            'college_cred_req' =>$this->string('50')->notNull(),
            'bac_deg_pref' =>$this->string('20')->notNull(),
            'prereq_courses' =>$this->string('500')->notNull(),
            'recom_courses' =>$this->string('500')->notNull(),
            'gpa' =>$this->string()->notNull(),
            'dat_score' =>$this->string('500')->notNull(),
            'dat_req' =>$this->string('20')->notNull(),
            'dat_latest' =>$this->string('20')->notNull(),
            'dat_oldest' =>$this->string('20')->notNull(),
            'dat_several' =>$this->string()->notNull(),
            'dat_canada' =>$this->string('20')->notNull(),
            'second_appl_req' =>$this->string('20')->notNull(),
            'interv_req' =>$this->string('20')->notNull(),
            'residents_prefered' =>$this->string('500')->notNull(),
            'instate_appl' =>$this->string()->notNull(),
            'outstate_appl' =>$this->string()->notNull(),
            'appl_start_date' =>$this->string('20')->notNull(),
            'appl_end_date' =>$this->string('20')->notNull(),
            'first_accept_date' =>$this->string('20')->notNull(),
            'apply_fee' =>$this->string()->notNull(),
            'fee_waiver_avail' =>$this->string()->notNull(),
            'racial_dist' =>$this->string('500')->notNull(),
            'age_dist' =>$this->string()->notNull(),
            'research_oppor' =>$this->string('20')->notNull(),
            'special_programs' =>$this->string('1000')->notNull(),
            'tuition' =>$this->string('500')->notNull(),
            'living_exp' =>$this->string('1000')->notNull(),
            'campus_type' =>$this->string('20')->notNull(),
            'oncampus_housing' =>$this->string('20')->notNull(),

            'class_size' => $this->integer('6')->notNull()->defaultValue(0),
        ]);

        $this->createIndex('idx_dental_name', 'dental', 'name');
        $this->createIndex('idx_dental_state', 'dental', 'state');
    }

    public function down()
    {
        $this->dropTable('dental');
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
