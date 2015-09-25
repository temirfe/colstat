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
        $this->addColumn($this->tableName,'stud_popul','varchar(200) NOT NULL');*/
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
        $this->addColumn($this->tableName,'grant_per_25','varchar(200) NOT NULL');
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
