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
            'url_fin_aid' => 'URL Financial Aid',
            'url_admissions' => 'URL Admissions',
            'url_apply' => 'URL Apply',
            'grad_rate' => 'Graduation Rate',
            'grad_rate_men' => 'Graduation Rate Men',
            'grad_rate_women' => 'Graduation Rate Women',
            'apply_fee' => 'Application Fee',
            'pct_adm_ttl' => 'Acceptance Rate',
            'pct_adm_men' => 'Percent Admitted (Men)',
            'pct_adm_wmen' => 'Percent Admitted (Women)',
            'ugrad_enr' => 'Undergraduate Enrollment',
            'ft_ugrad_enr' => 'Class Size',
            'pt_ugrad_enr' => 'Part-time Undergraduate Enrollment',
            'pct_ue_native' => 'Percent of undergraduate enrollment that are American Indian or Alaska Native',
            'pct_ue_asian' => 'Percent of undergraduate enrollment that are Asian/Native Hawaiian/Pacific Islander',
            'pct_ue_black' => 'Percent of undergraduate enrollment that are Black or African American',
            'pct_ue_latino' => 'Percent of undergraduate enrollment that are Hispanic/Latino',
            'pct_ue_white' => 'Percent of undergraduate enrollment that are White',
            'pct_ue_two' => 'Percent of undergraduate enrollment that are two or more races',
            'pct_ue_unk' => 'Percent of undergraduate enrollment that are Race/ethnicity unknown',
            'pct_fullfirst_any_finaid' => 'Percent of full-time first-time undergraduates receiving any financial aid',
            'avg_fullfirst_loan' => 'Average amount of student loan aid received by full-time first-time undergraduates',
            'pct_fullfirst_loan' => 'Percent of full-time first-time undergraduates receiving student loan aid',
            'avg_fullfirst_oloan' => 'Average amount of other student loan aid received by full-time first-time undergraduates',
            'appl_ttl' => 'Total Applications',
            'appl_men' => 'Applicants Men',
            'appl_wmen' => 'Applicants Women',
            'adm_ttl' => 'Admissions Total',
            'adm_men' => 'Admissions Men',
            'adm_wmen' => 'Admissions Women',
            'sat_cr_25' => 'SAT Critical Reading 25th percentile score',
            'sat_cr_75' => 'SAT Critical Reading 75th percentile score',
            'sat_ma_25' => 'SAT Math 25th percentile score',
            'sat_ma_75' => 'SAT Math 75th percentile score',
            'sat_wr_25' => 'SAT Writing 25th percentile score',
            'sat_wr_75' => 'SAT Writing 75th percentile score',
            'act_co_25' => 'ACT Composite 25th percentile score',
            'act_co_75' => 'ACT Composite 75th percentile score',
            'act_en_25' => 'ACT English 25th percentile score',
            'act_en_75' => 'ACT English 75th percentile score',
            'act_ma_25' => 'ACT Math 25th percentile score',
            'act_ma_75' => 'ACT Math 75th percentile score',
            'act_wr_25' => 'ACT Writing 25th percentile score',
            'act_wr_75' => 'ACT Writing 75th percentile score',
            'tuition_in' => 'In-state tuition and fees',
            'tuition_out' => 'Out-of-state tuition and fees',

            'med_sat_cr' => 'Median SAT Score (Critical Reading)',
            'med_sat_math' => 'Median SAT Score (Math)',
            'med_sat_wr' => 'Median SAT Score (Writing)',
            'avg_sat' => 'Average SAT Score',
            'med_act_cum' => 'Median Cumulative ACT Score',
            'med_act_eng' => 'Median ACT English Score',
            'med_act_math' =>'Median ACT Math Score',
            'med_act_wr' => 'ACT Median Writing Score',
            'pct_fed_loan' => 'Percent of all federal undergraduate students receiving a federal student loan (Excludes Parent Plus loans)',
            'med_debt_grad' => 'Median debt upon graduation (Excludes private and Graduate Plus loans)',
            'med_loan_monthly_payment' => 'Typical median loan monthly payment amount (if repayed in 10 years at 6% interest rate)',
            'pct_loan_principal_paid' => '% of loans where $1 or more of principal has been paid (3 years after graduation)',
            'med_earn_grad_fed_aid' => 'Median earnings of graduates that received federal aid (10 years after entering the school)',
            'pct_std_over25k' => 'Percent of students earning over $25,000/year who received federal aid (10 years after graduation)',
            'majors_offered' => 'Major',

        ];
    }
}
