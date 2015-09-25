<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_051319_create_business_table extends Migration
{
    public function up()
    {
        $this->createTable('business', [
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

            'grad_enr' => $this->integer('6')->notNull()->defaultValue(0),
            'avg_gmat' => $this->integer('6')->notNull()->defaultValue(0),
            'ft_grad_empl_grad' =>$this->string('20')->notNull(),
            'avg_start_sal' =>$this->string('20')->notNull(),
            'avg_ugrad_gpa' =>$this->string('20')->notNull(),
            'ft_grad_empl_3month' =>$this->string('20')->notNull(),
        ]);

        $this->createIndex('idx_business_name', 'business', 'name');
        $this->createIndex('idx_business_state', 'business', 'state');
    }

    public function down()
    {
        $this->dropTable('business');
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
