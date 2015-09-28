<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_054715_addcol_colname extends Migration
{
    public $tableName='colname';
    public function up()
    {
        /*$this->addColumn($this->tableName,'grad_enr','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'avg_gmat','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'ft_grad_empl_grad','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'avg_start_sal','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'avg_ugrad_gpa','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'ft_grad_empl_3month','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'campus_set','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'campus_house','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'stud_popul','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'l_class_size','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'gpa_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'gpa_50','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'gpa_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'lsat_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'lsat_50','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'lsat_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'expen_offcamp','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'expen_athome','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'scholar_less_full','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'scholar_full','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'scholar_more_full','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'ttl_stud_granted','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'grant_per_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'grant_per_50','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'grant_per_25','varchar(200) NOT NULL');*/

        /*$this->addColumn($this->tableName,'mission','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'first_year_enr','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'curriculum','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'inst_type','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'since_year','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'prog_length','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sem_start','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'degr_offered','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'contact_fin_aid','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'college_cred_req','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'prereq_courses','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'recom_courses','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'gpa','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'dat_score','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'dat_req','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'dat_latest','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'dat_oldest','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'dat_several','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'dat_canada','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'second_appl_req','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'interv_req','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'residents_prefered','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'instate_appl','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'outstate_appl','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'appl_start_date','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'appl_end_date','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'first_accept_date','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'fee_waiver_avail','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'racial_dist','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'age_dist','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'research_oppor','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'special_programs','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'tuition','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'living_exp','varchar(200) NOT NULL');*/
    }

    public function down()
    {
        echo "m150925_054715_addcol_colname cannot be reverted.\n";

        return false;
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
