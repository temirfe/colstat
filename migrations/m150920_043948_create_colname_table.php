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
            'pct_adm_ttl' => $this->string()->notNull(),
            'pct_adm_men' => $this->string()->notNull(),
            'pct_adm_wmen' => $this->string()->notNull(),
            'ugrad_enr' => $this->string()->notNull(),
            'ft_ugrad_enr' => $this->string()->notNull(),
            'pt_ugrad_enr' => $this->string()->notNull(),
            'pct_ue_native' =>$this->string()->notNull(),
            'pct_ue_asian' =>$this->string()->notNull(),
            'pct_ue_black' =>$this->string()->notNull(),
            'pct_ue_latino' =>$this->string()->notNull(),
            'pct_ue_white' =>$this->string()->notNull(),
            'pct_ue_two' =>$this->string()->notNull(),
            'pct_ue_unk' =>$this->string()->notNull(),
            'pct_fullfirst_any_finaid' =>$this->string()->notNull(),
            'avg_fullfirst_loan' =>$this->string()->notNull(),
            'pct_fullfirst_loan' =>$this->string()->notNull(),
            'avg_fullfirst_oloan' =>$this->string()->notNull(),
            'appl_ttl' => $this->string()->notNull(),
            'appl_men' => $this->string()->notNull(),
            'appl_wmen' => $this->string()->notNull(),
            'adm_ttl' => $this->string()->notNull(),
            'adm_men' => $this->string()->notNull(),
            'adm_wmen' => $this->string()->notNull(),
            'sat_cr_25' => $this->string()->notNull(),
            'sat_cr_75' => $this->string()->notNull(),
            'sat_ma_25' => $this->string()->notNull(),
            'sat_ma_75' => $this->string()->notNull(),
            'sat_wr_25' => $this->string()->notNull(),
            'sat_wr_75' => $this->string()->notNull(),
            'act_co_25' => $this->string()->notNull(),
            'act_co_75' => $this->string()->notNull(),
            'act_en_25' => $this->string()->notNull(),
            'act_en_75' => $this->string()->notNull(),
            'act_ma_25' => $this->string()->notNull(),
            'act_ma_75' => $this->string()->notNull(),
            'act_wr_25' => $this->string()->notNull(),
            'act_wr_75' => $this->string()->notNull(),
            'tuition_in' =>$this->string()->notNull(),
            'tuition_out' =>$this->string()->notNull(),
            'grad_enr' =>$this->string()->notNull(),
            'avg_gmat' =>$this->string()->notNull(),
            'ft_grad_empl_grad' =>$this->string()->notNull(),
            'avg_start_sal' =>$this->string()->notNull(),
            'avg_ugrad_gpa' =>$this->string()->notNull(),
            'ft_grad_empl_3month' =>$this->string()->notNull(),
            'campus_set' =>$this->string()->notNull(),
            'campus_house' =>$this->string()->notNull(),
            'stud_popul' =>$this->string()->notNull(),
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
