<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_091812_insert_schooltype extends Migration
{
    public $tableName='schooltype';
    public function up()
    {
        $this->insert($this->tableName,['title'=>'Undergraduate Schools','table_name'=>'university']);
        $this->insert($this->tableName,['title'=>'Business (MBA)','table_name'=>'business']);
        $this->insert($this->tableName,['title'=>'Law','table_name'=>'law']);
        $this->insert($this->tableName,['title'=>'Pharmacy','table_name'=>'pharmacy']);
        $this->insert($this->tableName,['title'=>'Occupational Therapy','table_name'=>'occupational_therapy']);
        $this->insert($this->tableName,['title'=>'Physical Therapy','table_name'=>'physical_therapy']);
        $this->insert($this->tableName,['title'=>'Medical','table_name'=>'medical']);
        $this->insert($this->tableName,['title'=>'Dental','table_name'=>'dental']);
        $this->insert($this->tableName,['title'=>'Nursing','table_name'=>'nursing']);
        $this->insert($this->tableName,['title'=>'Optometry','table_name'=>'optometry']);
        $this->insert($this->tableName,['title'=>'Engineering','table_name'=>'engineering']);
    }

    public function down()
    {
        echo "m150925_091812_insert_schooltype cannot be reverted.\n";

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
