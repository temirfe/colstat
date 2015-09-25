<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_075732_create_law_table extends Migration
{
    public function up()
    {
        $this->createTable('law', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string('20')->notNull(),
            'zip' => $this->string('20')->notNull(),
            'phone' => $this->string('20')->notNull(),
            'fax' => $this->string('20')->notNull(),
            'url' => $this->string('20')->notNull(),
            'president' => $this->string()->notNull(),
            'about' => $this->text(),
            'url_fin_aid' => $this->string()->notNull(),
            'url_admissions' => $this->string()->notNull(),
            'url_apply' => $this->string()->notNull(),
            'grad_rate' => $this->string('20')->notNull(),
            'grad_rate_men' =>$this->string('20')->notNull(),
            'grad_rate_women' =>$this->string('20')->notNull(),
            'apply_fee' =>$this->string('20')->notNull(),

            'pct_adm_ttl' =>$this->string('20')->notNull(),
            'pct_adm_men' =>$this->string('20')->notNull(),
            'pct_adm_wmen' =>$this->string('20')->notNull(),
            'pct_fullfirst_any_finaid' =>$this->string('20')->notNull(),
            'avg_fullfirst_loan' =>$this->string('20')->notNull(),
            'pct_fullfirst_loan' =>$this->string('20')->notNull(),
            'avg_fullfirst_oloan' =>$this->string('20')->notNull(),
            'appl_ttl' => $this->integer('6')->notNull()->defaultValue(0),
            'appl_men' => $this->integer('6')->notNull()->defaultValue(0),
            'appl_wmen' => $this->integer('6')->notNull()->defaultValue(0),
            'adm_ttl' => $this->integer('6')->notNull()->defaultValue(0),
            'adm_men' => $this->integer('6')->notNull()->defaultValue(0),
            'adm_wmen' => $this->integer('6')->notNull()->defaultValue(0),
            'tuition_in' =>$this->string('100')->notNull(),
            'tuition_out' =>$this->string('100')->notNull(),

            'l_class_size' => $this->integer('6')->notNull()->defaultValue(0),
            'gpa_75' =>$this->string('20')->notNull(),
            'gpa_50' =>$this->string('20')->notNull(),
            'gpa_25' =>$this->string('20')->notNull(),
            'lsat_75' => $this->integer('6')->notNull()->defaultValue(0),
            'lsat_50' => $this->integer('6')->notNull()->defaultValue(0),
            'lsat_25' => $this->integer('6')->notNull()->defaultValue(0),
            'expen_offcamp' =>$this->string('20')->notNull(),
            'expen_athome' =>$this->string('20')->notNull(),
            'scholar_less_full' => $this->integer('6')->notNull()->defaultValue(0),
            'scholar_full' => $this->integer('6')->notNull()->defaultValue(0),
            'scholar_more_full' => $this->integer('6')->notNull()->defaultValue(0),
            'ttl_stud_granted' => $this->integer('6')->notNull()->defaultValue(0),
            'grant_per_75' => $this->integer('6')->notNull()->defaultValue(0),
            'grant_per_50' => $this->integer('6')->notNull()->defaultValue(0),
            'grant_per_25' => $this->integer('6')->notNull()->defaultValue(0),
        ]);

        $this->createIndex('idx_law_name', 'law', 'name');
        $this->createIndex('idx_law_state', 'law', 'state');
    }

    public function down()
    {
        $this->dropTable('law');
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
