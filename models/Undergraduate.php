<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property integer $id
 * @property integer $graduate
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $fax
 * @property string $url
 * @property string $president
 * @property string $about
 * @property string $url_fin_aid
 * @property string $url_admissions
 * @property string $url_apply
 * @property string $grad_rate
 * @property string $grad_rate_men
 * @property string $grad_rate_women
 * @property string $apply_fee
 * @property string $pct_adm_ttl
 * @property string $pct_adm_men
 * @property string $pct_adm_wmen
 * @property integer $ugrad_enr
 * @property integer $ft_ugrad_enr
 * @property integer $pt_ugrad_enr
 * @property string $pct_ue_native
 * @property string $pct_ue_asian
 * @property string $pct_ue_black
 * @property string $pct_ue_latino
 * @property string $pct_ue_white
 * @property string $pct_ue_two
 * @property string $pct_ue_unk
 * @property string $pct_fullfirst_any_finaid
 * @property string $avg_fullfirst_loan
 * @property string $pct_fullfirst_loan
 * @property string $avg_fullfirst_oloan
 * @property integer $appl_ttl
 * @property integer $appl_men
 * @property integer $appl_wmen
 * @property integer $adm_ttl
 * @property integer $adm_men
 * @property integer $adm_wmen
 * @property integer $sat_cr_25
 * @property integer $sat_cr_75
 * @property integer $sat_ma_25
 * @property integer $sat_ma_75
 * @property integer $sat_wr_25
 * @property integer $sat_wr_75
 * @property integer $act_co_25
 * @property integer $act_co_75
 * @property integer $act_en_25
 * @property integer $act_en_75
 * @property integer $act_ma_25
 * @property integer $act_ma_75
 * @property integer $act_wr_25
 * @property integer $act_wr_75
 * @property string $tuition_in
 * @property string $tuition_out
 */
class Undergraduate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['graduate', 'ugrad_enr', 'ft_ugrad_enr', 'pt_ugrad_enr', 'appl_ttl', 'appl_men', 'appl_wmen', 'adm_ttl', 'adm_men', 'adm_wmen', 'sat_cr_25', 'sat_cr_75', 'sat_ma_25', 'sat_ma_75', 'sat_wr_25', 'sat_wr_75', 'act_co_25', 'act_co_75', 'act_en_25', 'act_en_75', 'act_ma_25', 'act_ma_75', 'act_wr_25', 'act_wr_75'], 'integer'],
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_ue_native', 'pct_ue_asian', 'pct_ue_black', 'pct_ue_latino', 'pct_ue_white', 'pct_ue_two', 'pct_ue_unk', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out'], 'safe'],
            [['about'], 'string'],
            [['name', 'address', 'city', 'president', 'url_fin_aid', 'url_admissions', 'url_apply'], 'string', 'max' => 255],
            [['state', 'zip', 'phone', 'fax', 'url', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_ue_native', 'pct_ue_asian', 'pct_ue_black', 'pct_ue_latino', 'pct_ue_white', 'pct_ue_two', 'pct_ue_unk', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'graduate' => 'Graduate',
            'name' => 'University/College',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'url' => 'Website',
            'president' => 'President',
            'about' => 'About',
            'url_fin_aid' => 'Url Fin Aid',
            'url_admissions' => 'Url Admissions',
            'url_apply' => 'Url Apply',
            'grad_rate' => 'Grad Rate',
            'grad_rate_men' => 'Grad Rate Men',
            'grad_rate_women' => 'Grad Rate Women',
            'apply_fee' => 'Apply Fee',
            'pct_adm_ttl' => 'Acceptance Rate',
            'pct_adm_men' => 'Pct Adm Men',
            'pct_adm_wmen' => 'Pct Adm Wmen',
            'ugrad_enr' => 'Ugrad Enr',
            'ft_ugrad_enr' => 'Class Size',
            'pt_ugrad_enr' => 'Pt Ugrad Enr',
            'pct_ue_native' => 'Pct Ue Native',
            'pct_ue_asian' => 'Pct Ue Asian',
            'pct_ue_black' => 'Pct Ue Black',
            'pct_ue_latino' => 'Pct Ue Latino',
            'pct_ue_white' => 'Pct Ue White',
            'pct_ue_two' => 'Pct Ue Two',
            'pct_ue_unk' => 'Pct Ue Unk',
            'pct_fullfirst_any_finaid' => 'Pct Fullfirst Any Finaid',
            'avg_fullfirst_loan' => 'Avg Fullfirst Loan',
            'pct_fullfirst_loan' => 'Pct Fullfirst Loan',
            'avg_fullfirst_oloan' => 'Avg Fullfirst Oloan',
            'appl_ttl' => 'Total Applications',
            'appl_men' => 'Appl Men',
            'appl_wmen' => 'Appl Wmen',
            'adm_ttl' => 'Adm Ttl',
            'adm_men' => 'Adm Men',
            'adm_wmen' => 'Adm Wmen',
            'sat_cr_25' => 'Sat Cr 25',
            'sat_cr_75' => 'Sat Cr 75',
            'sat_ma_25' => 'Sat Ma 25',
            'sat_ma_75' => 'Sat Ma 75',
            'sat_wr_25' => 'Sat Wr 25',
            'sat_wr_75' => 'Sat Wr 75',
            'act_co_25' => 'Act Co 25',
            'act_co_75' => 'Act Co 75',
            'act_en_25' => 'Act En 25',
            'act_en_75' => 'Act En 75',
            'act_ma_25' => 'Act Ma 25',
            'act_ma_75' => 'Act Ma 75',
            'act_wr_25' => 'Act Wr 25',
            'act_wr_75' => 'Act Wr 75',
            'tuition_in' => 'Tuition In',
            'tuition_out' => 'Tuition Out',
        ];
    }
}
