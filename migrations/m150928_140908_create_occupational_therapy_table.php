<?php

use yii\db\Schema;
use yii\db\Migration;

class m150928_140908_create_occupational_therapy_table extends Migration
{
    public function up()
    {
        $this->createTable('occupational_therapy', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string('20')->notNull(),
            'address' => $this->string()->notNull(),
            'url' => $this->string('20')->notNull(),
            'about' => $this->text(),
            'inst_type' =>$this->string('20')->notNull(),
            'campus_set' =>$this->string('20')->notNull(),
            'campus_house' =>$this->string('20')->notNull(),
            'stud_popul' =>$this->string('20')->notNull(),
            'grad_rate' => $this->string('20')->notNull(),
            'transfer_out_rate' => $this->string('20')->notNull(),
        ]);

        $this->createIndex('idx_occupational_therapy_name', 'occupational_therapy', 'name');
        $this->createIndex('idx_occupational_therapy_state', 'occupational_therapy', 'state');
    }

    public function down()
    {
        $this->dropTable('occupational_therapy');
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
