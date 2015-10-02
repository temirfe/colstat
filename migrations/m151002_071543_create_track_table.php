<?php

use yii\db\Schema;
use yii\db\Migration;

class m151002_071543_create_track_table extends Migration
{
    public function up()
    {
        $this->createTable('track', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer()->notNull(),
            'model_id' =>$this->integer()->notNull(),
            'model_type' =>$this->string('20')->notNull(),
            'specialty' =>$this->string('50')->notNull(),
            'specialty_other' =>$this->string('50')->notNull(),
            'degree_desired' =>$this->string('50')->notNull(),
            'test_score' =>$this->string('20')->notNull(),
            'gpa' =>$this->string('20')->notNull(),
            'scholarship_award' =>$this->string()->notNull(),
            'status' =>$this->string('20')->notNull(),
            'date_sent' =>$this->date()->notNull(),
            'date_status_complete' =>$this->date()->notNull(),
            'date_update' =>$this->date()->notNull(),
        ]);

        $this->createIndex('idx_track_model_id', 'track', 'model_id');
        $this->createIndex('idx_track_model_type', 'track', 'model_type');
        $this->createIndex('idx_track_user_id', 'track', 'user_id');
    }

    public function down()
    {
        $this->dropTable('track');
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
