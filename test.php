<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin provides access to Moodle data in form of analytics and reports in real time.
 *
 *
 * @package    local_intelliboard
 * @copyright  2018 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    https://intelliboard.net/
 */

require('../../config.php');


require_once($CFG->dirroot .'/local/intelliboard/lib.php');
require_once($CFG->dirroot .'/local/intelliboard/locallib.php');
require_once($CFG->dirroot .'/local/intelliboard/externallib.php');




	$params = (object) array(
		'filter_user_deleted'=>get_config('local_intelliboard', 'filter1'),
		'filter_user_suspended'=>get_config('local_intelliboard', 'filter2'),
		'filter_user_guest'=>get_config('local_intelliboard', 'filter3'),
		'filter_course_visible'=>get_config('local_intelliboard', 'filter4'),
		'filter_enrolmethod_status'=>get_config('local_intelliboard', 'filter5'),
		'filter_enrol_status'=>get_config('local_intelliboard', 'filter6'),
		'filter_module_visible'=>get_config('local_intelliboard', 'filter7'),
		'filter_columns'=>get_config('local_intelliboard', 'filter9'),
		'teacher_roles'=>get_config('local_intelliboard', 'filter10'),
		'learner_roles'=>get_config('local_intelliboard', 'filter11'),
		'completion'=>get_config('local_intelliboard', 'completions'),
		'filter_user_active'=>0,
		'filter_profile'=>0,
		'sizemode'=>get_config('local_intelliboard', 'sizemode'),
		'users'=>0,
		'custom'=> 0,
		'custom2'=> 0,
		'custom3'=> 0,
		'length'=>100,
		'start'=>0,
		'userid'=> 10012,
		'courseid'=>0,
		'cohortid'=>0,
		'filter'=>'',
		'timestart'=> 0,
		'timefinish'=>0
	);
	$function = "report1";
	$plugin = new local_intelliboard_external();
	$data = json_encode($plugin->{$function}($params));


	print_r($data); exit;


$PAGE->set_pagelayout('embedded');

$params = (object) array(
	'filter_user_deleted'=>get_config('local_intelliboard', 'filter1'),
	'filter_user_suspended'=>get_config('local_intelliboard', 'filter2'),
	'filter_user_guest'=>get_config('local_intelliboard', 'filter3'),
	'filter_course_visible'=>get_config('local_intelliboard', 'filter4'),
	'filter_enrolmethod_status'=>get_config('local_intelliboard', 'filter5'),
	'filter_enrol_status'=>get_config('local_intelliboard', 'filter6'),
	'filter_enrolled_users'=>get_config('local_intelliboard', 'filter8'),
	'filter_module_visible'=>get_config('local_intelliboard', 'filter7'),
	'filter_user_active'=> 0,
	'filter_columns'=>get_config('local_intelliboard', 'filter9'),
	'teacher_roles'=>get_config('local_intelliboard', 'filter10'),
	'learner_roles'=>get_config('local_intelliboard', 'filter11'),
	'filter_profile'=>0,
	'sizemode'=> false,
	'debug'=>1,
	'start'=>0,
	'userid'=>0,
	'length'=>5000,
	'courseid'=>0,
	'externalid'=>0,
	'filter'=>'',
	'custom'=> 0,
	'custom2'=> '',
	'custom3'=> 0,
	'cohortid'=> 0,
	'timestart'=>0,
	'timefinish'=>time()
);
$plugin = new local_intelliboard_external();



print('<pre>');

$start = 1;
$end = 10;



for ($i = $start; $i < $end; $i++) {
  if (method_exists($plugin,"report$i")) {
    //try {
      print("<hr>Report $i:");
      //print_r($report43[0]);

      $starttime = microtime(true);
      $report43 = $plugin->{"report$i"}($params);
      //print_r($report43); exit;
      $endtime = microtime(true);
      $duration = $endtime - $starttime;
      print("<br>TIME: <strong>$duration</strong><br>");
      print("FOUND RECORDS: <strong>".count($report43['data'])."</strong><br>");






//} catch (Exception $e) {
    //print("<hr>Report Caught exception:"); // $e->getMessage()
//}


  }
}

die("<h1>Done");


$functions = array('report1','report2','report3','report4','report5','report6','report7','report8','report9','report10','report11','report12','report13','report14','report15','report16','report17','report18','report18_graph','report19','report20','report21','report22','report23','report24','report25','report26','report27','report28','report29','report30','report31','report32','get_scormattempts','get_competency','get_competency_templates','report33','report34','report35','report36','report37','report38','report39','report40','report41','report43','report44','report45','report42','report46','report47','report58','report66','report72','report73','report75','report76','report77','report79','report80','report81','report82','report83','report84','report85','report86','report87','report88','report89','report90','report91','report92','report93','report94','report95','report96','report97','report98','report99','report99_graph','report100','report101','report102','report103','report104','report105','report106','report107','report108','report109','report110','report111','report112','report113','report114','report114_graph','report115','report116','report117','report118','report119','report120','report121','report122','report123','report124','report125','report126','report127','report128','get_course_modules','report78','report74','report71','report70','report67','report68','report69','get_max_attempts','report56','analytic1','analytic2','get_quizes','analytic3','analytic4','analytic5','analytic5table','analytic6','analytic7','analytic7table','analytic8','analytic8details','get_visits_perday','get_visits_perweek','get_live_info','get_course_instructors','get_course_discussions','get_course_questionnaire','get_course_survey','get_course_questionnaire_questions','get_course_survey_questions','get_cohort_users','get_users','get_grade_letters','get_questions','get_total_info','get_system_users','get_system_courses','get_system_load','get_module_visits','get_useragents','get_useros','get_userlang','get_users_count','get_most_visited_courses','get_enrollments_per_course','get_active_courses_per_day','get_unique_sessions','get_new_courses_per_day','get_users_per_day','get_active_users_per_day','get_countries','get_cohorts','get_elisuset','get_totara_pos','get_scorm_user_attempts','get_course_users','get_info','get_courses','get_userids','get_modules','get_outcomes','get_roles','get_roles_fix_name','get_tutors','get_cminfo','get_enrols','get_learner','get_learners','get_learner_courses','get_course','get_userinfo','get_user_info_fields_data','get_user_info_fields','get_site_avg','get_site_activity','count_records','analytic9','get_course_sections','get_course_user_groups','get_course_assignments','get_data_question_answers','get_course_databases','get_databases_question','get_history_items','get_history_grades','monitor27','monitor28','monitor29','monitor30','monitor31', 'get_assign_users', 'get_assign_courses', 'get_assign_fields', 'get_assign_categories', 'get_assign_cohorts', 'get_course_grade_categories','get_visits_per_day_by_entity','report137','get_role_users','report139_header','report139','get_course_feedback','report140','report141','report142','report143','report149','get_incorrect_answers','report150','report151','report152','report154', 'monitor32', 'monitor33', 'monitor34', 'monitor35', 'monitor36', 'monitor37', 'monitor38', 'monitor39', 'report144', 'report145', 'report155', 'report156', 'report157', 'report158', 'report159', 'report160', 'report161', 'report162', 'report163', 'report164', 'report165', 'analytic10', 'analytic10table', 'report167', 'get_question_tags', 'get_course_checklists', 'report168', 'get_course_checklist_items', 'get_quiz_questions', 'report169', 'report170', 'report171', 'report172');


foreach ($functions as $function) {
  try {
    if (strpos($function, "report") === false and strpos($function, "analytic") === false) {
      print("<hr>$function:");
      $starttime = microtime(true);
      $data = $plugin->{$function}($params);
      $endtime = microtime(true);
      $duration = $endtime - $starttime;
      print("<br>TIME: <strong>$duration</strong><br>");
      print("FOUND RECORDS: <strong>".count($data)."</strong><br>");
      //print("FOUND RESULT: <div style='display:none'></div><br>");
    }
  } catch (Exception $e) {
    print("<hr>Report Caught exception: <div style='display:none'>'.$e->getMessage().'</div>");
  }
}

//print('<hr>1:'.$time1);
//print('<hr>2:'.$time2);
//print('<hr>3:'.$time3);
