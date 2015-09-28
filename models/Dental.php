<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dental".
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
 * @property string $dean
 * @property string $about
 * @property string $url_fin_aid
 * @property string $mission
 * @property string $first_year_enr
 * @property string $curriculum
 * @property string $inst_type
 * @property integer $since_year
 * @property string $term_type
 * @property string $prog_length
 * @property string $sem_start
 * @property string $degr_offered
 * @property string $contact_fin_aid
 * @property string $college_cred_req
 * @property string $bac_deg_pref
 * @property string $prereq_courses
 * @property string $recom_courses
 * @property string $gpa
 * @property string $dat_score
 * @property string $dat_req
 * @property string $dat_latest
 * @property string $dat_oldest
 * @property string $dat_several
 * @property string $dat_canada
 * @property string $second_appl_req
 * @property string $interv_req
 * @property string $residents_prefered
 * @property string $instate_appl
 * @property string $outstate_appl
 * @property string $appl_start_date
 * @property string $appl_end_date
 * @property string $first_accept_date
 * @property string $apply_fee
 * @property string $fee_waiver_avail
 * @property string $racial_dist
 * @property string $age_dist
 * @property string $research_oppor
 * @property string $special_programs
 * @property string $tuition
 * @property string $living_exp
 * @property string $campus_type
 * @property string $oncampus_housing
 * @property integer $class_size
 */
class Dental extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dental';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'city', 'state', 'zip', 'phone', 'fax', 'url', 'dean', 'url_fin_aid', 'inst_type', 'term_type', 'prog_length', 'sem_start', 'degr_offered', 'contact_fin_aid', 'college_cred_req', 'bac_deg_pref', 'prereq_courses', 'recom_courses', 'gpa', 'dat_score', 'dat_req', 'dat_latest', 'dat_oldest', 'dat_several', 'dat_canada', 'second_appl_req', 'interv_req', 'residents_prefered', 'instate_appl', 'outstate_appl', 'appl_start_date', 'appl_end_date', 'first_accept_date', 'apply_fee', 'fee_waiver_avail', 'racial_dist', 'age_dist', 'research_oppor', 'special_programs', 'tuition', 'living_exp', 'campus_type', 'oncampus_housing'], 'required'],
            [['about', 'mission', 'first_year_enr', 'curriculum'], 'string'],
            [['since_year', 'class_size'], 'integer'],
            [['name', 'address', 'city', 'dean', 'url_fin_aid', 'gpa', 'dat_several', 'instate_appl', 'outstate_appl', 'apply_fee', 'fee_waiver_avail', 'age_dist'], 'string', 'max' => 255],
            [['state', 'zip', 'phone', 'fax', 'url', 'inst_type', 'term_type', 'prog_length', 'sem_start', 'degr_offered', 'bac_deg_pref', 'dat_req', 'dat_latest', 'dat_oldest', 'dat_canada', 'second_appl_req', 'interv_req', 'appl_start_date', 'appl_end_date', 'first_accept_date', 'research_oppor', 'campus_type', 'oncampus_housing'], 'string', 'max' => 20],
            [['contact_fin_aid', 'prereq_courses', 'recom_courses', 'dat_score', 'residents_prefered', 'racial_dist', 'tuition'], 'string', 'max' => 500],
            [['college_cred_req'], 'string', 'max' => 50],
            [['special_programs', 'living_exp'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'url' => 'Url',
            'dean' => 'Dean',
            'about' => 'About',
            'url_fin_aid' => 'Url Fin Aid',
            'mission' => 'Mission',
            'first_year_enr' => 'First Year Enr',
            'curriculum' => 'Curriculum',
            'inst_type' => 'Inst Type',
            'since_year' => 'Since Year',
            'term_type' => 'Term Type',
            'prog_length' => 'Prog Length',
            'sem_start' => 'Sem Start',
            'degr_offered' => 'Degr Offered',
            'contact_fin_aid' => 'Contact Fin Aid',
            'college_cred_req' => 'College Cred Req',
            'bac_deg_pref' => 'Bac Deg Pref',
            'prereq_courses' => 'Prereq Courses',
            'recom_courses' => 'Recom Courses',
            'gpa' => 'Gpa',
            'dat_score' => 'Dat Score',
            'dat_req' => 'Dat Req',
            'dat_latest' => 'Dat Latest',
            'dat_oldest' => 'Dat Oldest',
            'dat_several' => 'Dat Several',
            'dat_canada' => 'Dat Canada',
            'second_appl_req' => 'Second Appl Req',
            'interv_req' => 'Interv Req',
            'residents_prefered' => 'Residents Prefered',
            'instate_appl' => 'Instate Appl',
            'outstate_appl' => 'Outstate Appl',
            'appl_start_date' => 'Appl Start Date',
            'appl_end_date' => 'Appl End Date',
            'first_accept_date' => 'First Accept Date',
            'apply_fee' => 'Apply Fee',
            'fee_waiver_avail' => 'Fee Waiver Avail',
            'racial_dist' => 'Racial Dist',
            'age_dist' => 'Age Dist',
            'research_oppor' => 'Research Oppor',
            'special_programs' => 'Special Programs',
            'tuition' => 'Tuition',
            'living_exp' => 'Living Exp',
            'campus_type' => 'Campus Type',
            'oncampus_housing' => 'Oncampus Housing',
            'class_size' => 'Class Size',
        ];
    }
}
