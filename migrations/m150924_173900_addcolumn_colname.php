<?php

use yii\db\Schema;
use yii\db\Migration;

class m150924_173900_addcolumn_colname extends Migration
{
    public $tableName='colname';
    public function up()
    {
        $this->addColumn($this->tableName,'pct_adm_ttl','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_adm_men','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_adm_wmen','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'ugrad_enr','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'ft_ugrad_enr','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pt_ugrad_enr','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_native','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_asian','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_black','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_latino','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_white','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_two','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_ue_unk','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_fullfirst_any_finaid','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'avg_fullfirst_loan','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'pct_fullfirst_loan','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'avg_fullfirst_oloan','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'appl_ttl','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'appl_men','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'appl_wmen','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'adm_ttl','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'adm_men','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'adm_wmen','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sat_cr_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sat_cr_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sat_ma_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sat_ma_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sat_wr_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'sat_wr_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_co_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_co_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_en_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_en_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_ma_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_ma_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_wr_25','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'act_wr_75','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'tuition_in','varchar(200) NOT NULL');
        $this->addColumn($this->tableName,'tuition_out','varchar(200) NOT NULL');
    }

    public function down()
    {
        echo "m150924_173900_addcolumn_colname cannot be reverted.\n";

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
