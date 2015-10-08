<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "business".
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
 * @property integer $grad_enr
 * @property integer $avg_gmat
 * @property string $ft_grad_empl_grad
 * @property string $avg_start_sal
 * @property string $avg_ugrad_gpa
 * @property string $ft_grad_empl_3month
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'business';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'president', 'url_fin_aid', 'url_admissions', 'url_apply', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'tuition_in', 'tuition_out', 'ft_grad_empl_grad', 'avg_start_sal', 'avg_ugrad_gpa', 'ft_grad_empl_3month'], 'safe'],
            [['about'], 'string'],
            [['appl_ttl', 'appl_men', 'appl_wmen', 'adm_ttl', 'adm_men', 'adm_wmen', 'grad_enr', 'avg_gmat'], 'integer'],
            [['name', 'address', 'city', 'president', 'url_fin_aid', 'url_admissions', 'url_apply'], 'string', 'max' => 255],
            [['state', 'zip', 'phone', 'fax', 'url', 'grad_rate', 'grad_rate_men', 'grad_rate_women', 'apply_fee', 'pct_adm_ttl', 'pct_adm_men', 'pct_adm_wmen', 'pct_fullfirst_any_finaid', 'avg_fullfirst_loan', 'pct_fullfirst_loan', 'avg_fullfirst_oloan', 'ft_grad_empl_grad', 'avg_start_sal', 'avg_ugrad_gpa', 'ft_grad_empl_3month'], 'string', 'max' => 20],
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
            'appl_ttl' => 'Appl Ttl',
            'appl_men' => 'Appl Men',
            'appl_wmen' => 'Appl Wmen',
            'adm_ttl' => 'Adm Ttl',
            'adm_men' => 'Adm Men',
            'adm_wmen' => 'Adm Wmen',
            'tuition_in' => 'Tuition (In State)',
            'tuition_out' => 'Tuition (Out of State)',
            'grad_enr' => 'Enrollment',
            'avg_gmat' => 'Average GMAT',
            'ft_grad_empl_grad' => 'Full-time Graduates Employed At Graduation',
            'avg_start_sal' => 'Average Starting Salary (Including Bonus)',
            'avg_ugrad_gpa' => 'Average Undergraduate GPA',
            'ft_grad_empl_3month' => 'Full-Time Graduates Employed Three Months After Graduation',
        ];
    }
}
