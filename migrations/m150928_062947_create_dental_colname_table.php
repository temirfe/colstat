<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_062947_create_dental_colname_table extends Migration
{
    public function up()
    {
        $this->createTable('dental_colname', [
            'id' => $this->primaryKey(),
            'name' => $this->string('100')->notNull(),
            'address' => $this->string('100')->notNull(),
            'city' => $this->string('100')->notNull(),
            'state' => $this->string('100')->notNull(),
            'zip' => $this->string('100')->notNull(),
            'phone' => $this->string('100')->notNull(),
            'fax' => $this->string('100')->notNull(),
            'url' => $this->string('100')->notNull(),
            'dean' => $this->string('100')->notNull(),
            'url_fin_aid' => $this->string('100')->notNull(),

            'mission' =>$this->string('100')->notNull(),
            'curriculum' => $this->string('100')->notNull(),
            'inst_type' => $this->string('100')->notNull(),
            'since_year' => $this->string('100')->notNull(),
            'prog_length' =>$this->string('100')->notNull(),
            'term_type' =>$this->string('100')->notNull(),
            'sem_start' =>$this->string('100')->notNull(),
            'degr_offered' =>$this->string('100')->notNull(),
            'contact_fin_aid' =>$this->string('100')->notNull(),
            'college_cred_req' =>$this->string('100')->notNull(),
            'bac_deg_pref' =>$this->string('100')->notNull(),
            'first_year_enr' => $this->string('100')->notNull(),
            'prereq_courses' =>$this->string('100')->notNull(),
            'recom_courses' =>$this->string('100')->notNull(),
            'gpa' => $this->string('100')->notNull(),
            'dat_score' =>$this->string('100')->notNull(),
            'dat_req' =>$this->string('100')->notNull(),
            'dat_latest' =>$this->string('100')->notNull(),
            'dat_oldest' =>$this->string('100')->notNull(),
            'dat_several' =>$this->string('100')->notNull(),
            'dat_canada' =>$this->string('100')->notNull(),
            'second_appl_req' =>$this->string('100')->notNull(),
            'interv_req' =>$this->string('100')->notNull(),
            'residents_prefered' =>$this->string('100')->notNull(),
            'instate_appl' =>$this->string('100')->notNull(),
            'outstate_appl' =>$this->string('100')->notNull(),
            'appl_start_date' =>$this->string('100')->notNull(),
            'appl_end_date' =>$this->string('100')->notNull(),
            'first_accept_date' =>$this->string('100')->notNull(),
            'apply_fee' =>$this->string('100')->notNull(),
            'fee_waiver_avail' =>$this->string()->notNull(),
            'racial_dist' =>$this->string('100')->notNull(),
            'age_dist' =>$this->string('100')->notNull(),
            'research_oppor' =>$this->string('100')->notNull(),
            'special_programs' =>$this->string('100')->notNull(),
            'tuition' =>$this->string('100')->notNull(),
            'living_exp' =>$this->string('100')->notNull(),

            'class_size' => $this->string('100')->notNull(),
            'campus_type' => $this->string('100')->notNull(),
            'oncampus_housing' => $this->string('100')->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('dental_colname');
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
