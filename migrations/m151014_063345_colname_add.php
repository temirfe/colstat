<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_063345_colname_add extends Migration
{
    public $tableName='colname';
    public function up()
    {
        $this->addColumn($this->tableName,'med_sat_cr','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_sat_math','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_sat_wr','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'avg_sat','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_act_cum','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_act_eng','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_act_math','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_act_wr','varchar(100) NOT NULL');

        $this->addColumn($this->tableName,'pct_fed_loan','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_debt_grad','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_loan_monthly_payment','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'pct_loan_principal_paid','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'med_earn_grad_fed_aid','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'pct_std_over25k','varchar(100) NOT NULL');

        $this->addColumn($this->tableName,'majors_offered','varchar(100) NOT NULL');
    }

    public function down()
    {
        echo "m151014_063345_colname_add cannot be reverted.\n";

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
