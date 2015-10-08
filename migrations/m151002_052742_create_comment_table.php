<?php

use yii\db\Schema;
use yii\db\Migration;

class m151002_052742_create_comment_table extends Migration
{
   /* public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer()->notNull(),
            'model_id' =>$this->integer()->notNull(),
            'model_type' =>$this->string('20')->notNull(),
            'text' =>$this->text(),
            'date' =>$this->date()->notNull(),
        ]);

        $this->createIndex('idx_comment_model_id', 'comment', 'model_id');
        $this->createIndex('idx_comment_user_id', 'comment', 'user_id');
    }*/

    public function down()
    {
        $this->dropTable('comment');
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
