<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "law".
 *
 * @property integer $id
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
 * @property string $tuition_in
 * @property string $tuition_out
 * @property integer $l_class_size
 * @property string $gpa_75
 * @property string $gpa_50
 * @property string $gpa_25
 * @property integer $lsat_75
 * @property integer $lsat_50
 * @property integer $lsat_25
 * @property string $expen_offcamp
 * @property string $expen_athome
 * @property integer $scholar_less_full
 * @property integer $scholar_full
 * @property integer $scholar_more_full
 * @property integer $ttl_stud_granted
 * @property integer $grant_per_75
 * @property integer $grant_per_50
 * @property integer $grant_per_25
 */
class Law extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'law';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out', 'gpa_75', 'gpa_50', 'gpa_25', 'expen_offcamp', 'expen_athome'], 'safe'],
            [['about'], 'string'],
            [['appl_ttl', 'appl_men', 'appl_wmen', 'adm_ttl', 'adm_men', 'adm_wmen', 'l_class_size', 'lsat_75', 'lsat_50', 'lsat_25', 'scholar_less_full', 'scholar_full', 'scholar_more_full', 'ttl_stud_granted', 'grant_per_75', 'grant_per_50', 'grant_per_25'], 'integer'],
            [['name', 'address', 'city', 'president', 'url_fin_aid', 'url_admissions', 'url_apply'], 'string', 'max' => 255],
            [['state', 'zip', 'phone', 'fax', 'url', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'gpa_75', 'gpa_50', 'gpa_25', 'expen_offcamp', 'expen_athome'], 'string', 'max' => 20],
            [['tuition_in', 'tuition_out'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'University Name',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'url' => 'Url',
            'president' => 'President',
            'about' => 'About',
            'url_fin_aid' => 'Url Fin Aid',
            'url_admissions' => 'Url Admissions',
            'url_apply' => 'Url Apply',
            'grad_rate' => 'Grad Rate',
            'grad_rate_men' => 'Grad Rate Men',
            'grad_rate_women' => 'Grad Rate Women',
            'apply_fee' => 'Apply Fee',
            'pct_adm_ttl' => 'Admit Rate',
            'pct_adm_men' => 'Pct Adm Men',
            'pct_adm_wmen' => 'Pct Adm Wmen',
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
            'tuition_in' => 'Tuition In',
            'tuition_out' => 'Tuition Out',
            'l_class_size' => 'Class Size',
            'gpa_75' => 'Gpa 75',
            'gpa_50' => 'Gpa 50',
            'gpa_25' => 'Gpa 25',
            'lsat_75' => 'Lsat 75',
            'lsat_50' => 'Lsat 50',
            'lsat_25' => 'Lsat 25',
            'expen_offcamp' => 'Expen Offcamp',
            'expen_athome' => 'Expen Athome',
            'scholar_less_full' => 'Scholar Less Full',
            'scholar_full' => 'Scholar Full',
            'scholar_more_full' => 'Scholar More Full',
            'ttl_stud_granted' => 'Ttl Stud Granted',
            'grant_per_75' => 'Grant Per 75',
            'grant_per_50' => 'Grant Per 50',
            'grant_per_25' => 'Grant Per 25',
        ];
    }
}
