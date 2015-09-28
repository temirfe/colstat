<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_153949_create_optometry_colname_table extends Migration
{
    public function up()
    {
        $this->createTable('optometry_colname', [
            'id' => $this->primaryKey(),
            'name' => $this->string('100')->notNull(),
            'city' => $this->string('100')->notNull(),
            'state' => $this->string('100')->notNull(),
            'address' => $this->string('100')->notNull(),
            'url' => $this->string('100')->notNull(),
            'about' => $this->string('100')->notNull(),
            'class_size' => $this->string('100')->notNull(),
            'matricul_female' => $this->string('100')->notNull(),
            'matricul_male' => $this->string('100')->notNull(),
            'matricul_total' => $this->string('100')->notNull(),
            'average_gpa' => $this->string('100')->notNull(),
            'aa1_avg_oat' => $this->string('100')->notNull(),
            'ts2_avg_oat' => $this->string('100')->notNull(),
            'pct_ba_deg' => $this->string('100')->notNull(),
            'in_state_amnt' => $this->string('100')->notNull(),
            'out_state_amnt' => $this->string('100')->notNull(),
            'prereqs' => $this->string('100')->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('optometry_colname');
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
