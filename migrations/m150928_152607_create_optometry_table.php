<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_152607_create_optometry_table extends Migration
{
    public function up()
    {
        /*$this->createTable('optometry', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string('20')->notNull(),
            'address' => $this->string()->notNull(),
            'url' => $this->string('20')->notNull(),
            'about' => $this->text(),

            'class_size' => $this->integer('6')->notNull()->defaultValue(0),
            'matricul_female' => $this->integer('6')->notNull()->defaultValue(0),
            'matricul_male' => $this->integer('6')->notNull()->defaultValue(0),
            'matricul_total' => $this->integer('6')->notNull()->defaultValue(0),
            'average_gpa' =>$this->string('20')->notNull(),
            'aa1_avg_oat' => $this->integer('6')->notNull()->defaultValue(0),
            'ts2_avg_oat' => $this->integer('6')->notNull()->defaultValue(0),
            'pct_ba_deg' =>$this->string('20')->notNull(),
            'in_state_amnt' =>$this->integer('6')->notNull()->defaultValue(0),
            'out_state_amnt' =>$this->integer('6')->notNull()->defaultValue(0),
            'prereqs' => $this->text(),
        ]);

        $this->createIndex('idx_optometry_name', 'optometry', 'name');
        $this->createIndex('idx_optometry_state', 'optometry', 'state');*/
    }

    public function down()
    {
        $this->dropTable('optometry');
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
