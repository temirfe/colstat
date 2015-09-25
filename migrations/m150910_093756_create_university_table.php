<?php

use yii\db\Schema;
use yii\db\Migration;

class m150910_093756_create_university_table extends Migration
{
    public function up()
    {
        $this->createTable('university', [
            'id' => $this->primaryKey(),
            'graduate' => $this->integer('1')->notNull()->defaultValue(0),
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
            'ugrad_enr' => $this->integer('6')->notNull()->defaultValue(0),
            'ft_ugrad_enr' => $this->integer('6')->notNull()->defaultValue(0),
            'pt_ugrad_enr' => $this->integer('6')->notNull()->defaultValue(0),
            'pct_ue_native' =>$this->string('20')->notNull(),
            'pct_ue_asian' =>$this->string('20')->notNull(),
            'pct_ue_black' =>$this->string('20')->notNull(),
            'pct_ue_latino' =>$this->string('20')->notNull(),
            'pct_ue_white' =>$this->string('20')->notNull(),
            'pct_ue_two' =>$this->string('20')->notNull(),
            'pct_ue_unk' =>$this->string('20')->notNull(),
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
            'sat_cr_25' => $this->integer('3')->notNull()->defaultValue(0),
            'sat_cr_75' => $this->integer('3')->notNull()->defaultValue(0),
            'sat_ma_25' => $this->integer('3')->notNull()->defaultValue(0),
            'sat_ma_75' => $this->integer('3')->notNull()->defaultValue(0),
            'sat_wr_25' => $this->integer('3')->notNull()->defaultValue(0),
            'sat_wr_75' => $this->integer('3')->notNull()->defaultValue(0),
            'act_co_25' => $this->integer('2')->notNull()->defaultValue(0),
            'act_co_75' => $this->integer('2')->notNull()->defaultValue(0),
            'act_en_25' => $this->integer('2')->notNull()->defaultValue(0),
            'act_en_75' => $this->integer('2')->notNull()->defaultValue(0),
            'act_ma_25' => $this->integer('2')->notNull()->defaultValue(0),
            'act_ma_75' => $this->integer('2')->notNull()->defaultValue(0),
            'act_wr_25' => $this->integer('2')->notNull()->defaultValue(0),
            'act_wr_75' => $this->integer('2')->notNull()->defaultValue(0),
            'tuition_in' =>$this->string('20')->notNull(),
            'tuition_out' =>$this->string('20')->notNull(),
        ]);

        $this->createIndex('idx_university_name', 'university', 'name');
        $this->createIndex('idx_university_state', 'university', 'state');
    }

    public function down()
    {
        $this->dropTable('university');
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
