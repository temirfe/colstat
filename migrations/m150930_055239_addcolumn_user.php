<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_055239_addcolumn_user extends Migration
{
    public $tableName='user';
    public function up()
    {
        /*$this->addColumn($this->tableName,'name','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'city','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'state','varchar(100) NOT NULL');
        $this->addColumn($this->tableName,'hear','varchar(500) NOT NULL');
        $this->addColumn($this->tableName,'fb_id','varchar(30) NOT NULL');
        $this->addColumn($this->tableName,'twi_id','varchar(30) NOT NULL');
        $this->addColumn($this->tableName,'google_id','varchar(30) NOT NULL');
        $this->addColumn($this->tableName,'lastvisit','integer(20) NOT NULL');*/
    }

    public function down()
    {
        echo "m150930_055239_addcolumn_user cannot be reverted.\n";

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
