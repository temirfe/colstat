<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_093438_addcol_university extends Migration
{
    public $tableName='university';
    public function up()
    {
        $this->addColumn($this->tableName,'med_sat_cr','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_sat_math','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_sat_wr','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'avg_sat','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_act_cum','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_act_eng','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_act_math','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_act_wr','varchar(20) NOT NULL');

        $this->addColumn($this->tableName,'pct_fed_loan','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_debt_grad','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_loan_monthly_payment','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'pct_loan_principal_paid','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'med_earn_grad_fed_aid','varchar(20) NOT NULL');
        $this->addColumn($this->tableName,'pct_std_over25k','varchar(20) NOT NULL');

        $this->addColumn($this->tableName,'majors_offered','text NOT NULL');
    }

    public function down()
    {
        echo "m151014_093438_addcol_university cannot be reverted.\n";

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
