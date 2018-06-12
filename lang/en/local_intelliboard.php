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
 * @copyright  2017 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    http://intelliboard.net/
 */

$string['pluginname'] = 'IntelliBoard.net Plugin';
$string['tracking_title'] = 'Time Tracking';
$string['tracking'] = 'Session Tracking';
$string['dashboard'] = 'Dashboard';
$string['settings'] = 'Settings';
$string['adv_settings'] = 'Advanced Setting';
$string['intelliboardroot'] = 'IntelliBoard';
$string['report'] = 'Report';
$string['reports'] = 'Reports';
$string['learners'] = 'Learners';
$string['courses'] = 'Courses';
$string['load'] = 'Performance';
$string['inactivity'] = 'Inactivity';
$string['inactivity_desc'] = 'User inactivity time (in seconds)';
$string['ajax'] = 'Frequency';
$string['ajax_desc'] = 'Session storing frequency via AJAX. 0 - AJAX disabled (in seconds)';
$string['enabled'] = 'Enabled Tracking';
$string['enabled_desc'] = 'Enable Tracking';
$string['trackadmin'] = 'Tracking Admins';
$string['logs'] = 'Migration Tool';
$string['trackadmin_desc'] = 'Enable tracking for admin users (not recommended)';
$string['intelliboard:instructors'] = 'IntelliBoard [instructor]';
$string['intelliboard:students'] = 'IntelliBoard [student]';
$string['intelliboard:view'] = 'IntelliBoard [view]';
$string['intelliboard:manage'] = 'IntelliBoard [manage]';
$string['intelliboard:competency'] = 'IntelliBoard [competency]';
$string['tls12'] = 'TLS v1.2';
$string['tls12_desc'] = 'Advanced settings: TLS v1.2';
$string['sso'] = 'SSO link';
$string['sso_desc'] = 'SSO Link to IntelliBoard.net';
$string['api'] = 'Alternative API';
$string['api_desc'] = 'Use alternative API server (to avoid firewall blocking)';
$string['server'] = 'IntelliBoard Server';
$string['server_usa'] = 'IntelliBoard USA';
$string['server_au'] = 'IntelliBoard Australia';
$string['server_eu'] = 'IntelliBoard Europe';
$string['filters'] = 'Dashboard filters';
$string['filter1'] = 'Deleted users';
$string['filter2'] = 'Suspended users';
$string['filter3'] = 'Guest user';
$string['filter4'] = 'Course filter';
$string['filter5'] = 'Enrolment method filter';
$string['filter6'] = 'User enrolment filter';
$string['filter7'] = 'Activities/Resourses filter';
$string['filter8'] = 'Enrolled users filter';
$string['filter1_desc'] = 'Show deleted users';
$string['filter2_desc'] = 'Show suspended users';
$string['filter3_desc'] = 'Show [guest] user in reports';
$string['filter4_desc'] = 'Show not visible courses';
$string['filter5_desc'] = 'Show not active enrollment methods';
$string['filter6_desc'] = 'Show users with not active enrollment status';
$string['filter7_desc'] = 'Show not visible Activities/Resourses';
$string['filter8_desc'] = 'Show only enrolled users (not recommended)';
$string['intelliboardaccess'] = 'You do not have permission to view this page. Please contact your Administrator for assistance.';
$string['tex1'] = 'IntelliBoard Learner Dashboard is not enabled.';
$string['account'] = 'Subscription Information';
$string['te12'] = 'First Name';
$string['te13'] = 'Last Name';
$string['te1'] = 'Email';
$string['te1_desc'] = 'Enter Email used with IntelliBoard.net subscription. If you do not have an active subscription, please register at <a target="_blank" href="https://intelliboard.net">IntelliBoard.net</a>. The Learner and Instructor Dashboard are available with a subscription of Level 4 and higher.';
$string['n1'] = 'Overview [Learner Progress]';
$string['n2'] = 'Overview [Grade Progress]';
$string['n3'] = 'Overview [Activity Progress]';
$string['n12'] = 'Overview [Course Overview]';
$string['n4'] = 'Overview [Totals]';
$string['n5'] = 'Current Progress';
$string['n13'] = 'Total Students';
$string['n6'] = 'Widget: Correlations';
$string['n14'] = 'Widget: Learner Engagement';
$string['n18'] = 'Widget: Student Grade Progression';
$string['n7'] = 'Widget: Event Utilization';
$string['n15'] = 'Widget: Activity Utilization';
$string['n16'] = 'Widget: Topic Utilization';
$string['n8'] = 'Courses Page';
$string['n9'] = 'Reports Page';
$string['n10'] = 'Instructor Dashboard';
$string['n101'] = 'Enable Instructor Dashboard';
$string['n11'] = 'Alternative text for navigation menu';
$string['ts1'] = 'Learner Dashboard';
$string['ts2'] = 'Learner Dashboard Page';
$string['ts3'] = 'Learner Dashboard Courses';
$string['ts4'] = 'Learner Dashboard Grades';
$string['ts5'] = 'Learner Dashboard Reports';
$string['t01'] = 'Time filter: Last Month';
$string['t02'] = 'Time filter: Last Quarter';
$string['t03'] = 'Time filter: Last Semester';
$string['t04'] = 'Enable [header] Completed courses';
$string['t05'] = 'Enable [header] Courses in progress';
$string['t06'] = 'Enable [header] Courses avg. grade';
$string['t07'] = 'Enable [header] Messages';
$string['t08'] = 'Enable [header] Courses sum. grade';
$string['t09'] = 'Instructor can see own students';
$string['t1'] = 'Enable Learner Dashboard';
$string['t2'] = 'Enable Dashboard';
$string['t3'] = 'Enable Courses';
$string['t4'] = 'Enable Grades';
$string['t48'] = 'Enable Reports';
$string['t5'] = 'Enable [Activity progress] chart';
$string['t6'] = 'Enable [Course progress] chart';
$string['t7'] = 'Enable [My course average]';
$string['t8'] = 'Enable [Overall course average]';
$string['t9'] = 'Enable [Assignments] widget';
$string['t10'] = 'Enable [Quizzes] widget';
$string['t11'] = 'Enable [Course Progress] widget';
$string['t12'] = 'Enable [Activity participation] widget';
$string['t13'] = 'Enable [Learning] widget';
$string['t14'] = 'Enable [Course success] widget';
$string['t15'] = 'Enable [Correlations] widget';
$string['t16'] = 'Enable course teacher';
$string['t17'] = 'Enable course category';
$string['t18'] = 'Enable course completion';
$string['t19'] = 'Enable course grade';
$string['t20'] = 'Enable course class average';
$string['t21'] = 'Enable course time spent';
$string['t22'] = 'Enable course start date';
$string['t23'] = 'Enable [Course start date] column';
$string['t24'] = 'Enable [Enrolled date] column';
$string['t25'] = 'Enable [Progress] column';
$string['t26'] = 'Enable [Letter] column';
$string['t27'] = 'Enable [Completed Activities] column';
$string['t28'] = 'Enable [Grade] column';
$string['t29'] = 'Enable [Course Completion Status] column';
$string['t30'] = 'Enable [Activity Grades] column';
$string['t31'] = 'Enable [Assignments][Grade] widget column';
$string['t32'] = 'Enable [Assignments][Due Date] widget column';
$string['t33'] = 'Enable [Quizzes][Grade] widget column';
$string['t34'] = 'Enable [Quizzes][Due Date] widget column';
$string['t35'] = 'Enable [Course Progress][Progress] widget column';
$string['t36'] = 'Enable [Course Progress][Grade] widget column';
$string['t37'] = 'Enable [Course Progress][Enrolled] widget column';
$string['t38'] = 'Enable [Course Progress][Completed] widget column';
$string['t39'] = 'Enable [Progress][Goal Grade] option';
$string['t40'] = 'Enable [Progress][Class Avg.] option';
$string['t41'] = 'Enable [Activity Grades header] Completed on';
$string['t42'] = 'Enable [Activity Grades header] Last access on course';
$string['t43'] = 'Enable [Activity Grades] Type column';
$string['t44'] = 'Enable [Activity Grades] Grade column';
$string['t45'] = 'Enable [Activity Grades] Graded column';
$string['t46'] = 'Enable [Activity Grades] Completed column';
$string['t47'] = 'Courses [grid] background color';
$string['t49'] = 'Report filter columns';
$string['t50'] = 'Teacher roles';
$string['t51'] = 'Student roles';
$string['current_grade'] = 'current grade';
$string['average_grade'] = 'average grade';
$string['type_here'] = 'Type here...';
$string['enrolled_date'] = 'Enrolled date';
$string['teacher'] = 'Teacher';
$string['category'] = 'Category';
$string['current_grade'] = 'Current grade';
$string['completion'] = 'Completion';
$string['class_average'] = 'Class average';
$string['time_spent'] = 'Time Spent';
$string['completed_on'] = 'Completed on {$a}';
$string['passed_on'] = 'Completed (pass) on {$a}';
$string['failed_on'] = 'Completed (fail) on {$a}';
$string['last_access_on_course'] = 'Last access on course: {$a}';
$string['you_have_certificates'] = 'You have {$a} certificates';
$string['close'] = 'Close';
$string['view_course_details'] = 'View course details';
$string['incomplete'] = 'Incomplete';
$string['return_to_grades'] = 'Return to Grades';
$string['grade'] = 'Grade';
$string['last_week'] = 'Last Week';
$string['last_month'] = 'Last Month';
$string['last_quarter'] = 'Last Quarter';
$string['last_semester'] = 'Last Semester';
$string['activity_progress'] = 'Activity progress';
$string['course_progress'] = 'Course progress';
$string['my_course_average_all'] = 'my course average (all courses)';
$string['overall_course_average'] = 'overall course average (all learners; all courses)';
$string['assignments'] = 'Assignments';
$string['quizzes'] = 'Quizzes';
$string['assignment_name'] = 'Assignment name';
$string['due_date'] = 'Due Date';
$string['no_data'] = 'No data';
$string['quiz_name'] = 'Quiz name';
$string['all_courses'] = 'All courses';
$string['time_period_due'] = 'Time period (Due Date)';
$string['all_data'] = 'All data';
$string['progress'] = 'Progress';
$string['enrolled'] = 'Enrolled';
$string['completed'] = 'Completed';
$string['activity_participation'] = 'Activity participation';
$string['learning'] = 'Learning';
$string['course_success'] = 'Course success';
$string['correlations'] = 'Correlations';
$string['course_start_date'] = 'Course start date';
$string['letter'] = 'Letter';
$string['completed_activities'] = 'Completed Activities';
$string['score'] = 'Grade';
$string['course_completion_status'] = 'Course Completion Status';
$string['activity_grades'] = 'Activity Grades';
$string['completion_is_not_enabled'] = 'Completion is not enabled for this course';
$string['activities'] = 'Activities';
$string['activity_name'] = 'Activity name';
$string['type'] = 'Type';
$string['graded'] = 'Graded';
$string['passed'] = 'Passed';
$string['failed'] = 'Failed';
$string['completed_courses'] = 'Completed courses';
$string['courses_in_progress'] = 'Courses in progress';
$string['courses_avg_grade'] = 'Courses avg. grade';
$string['courses_sum_grade'] = 'Courses sum. grade';
$string['grades'] = 'Grades';
$string['messages'] = 'Messages';
$string['x_completions'] = '{$a} Completions';
$string['completion_status'] = 'Completion status';
$string['users_activity'] = 'Users activity';
$string['daily'] = 'Daily';
$string['weekly'] = 'Weekly';
$string['monthly'] = 'Monthly';
$string['number_of_sessions'] = 'Number of sessions';
$string['number_today'] = '{$a} today';
$string['number_this_week'] = '{$a} this week';
$string['course_completions'] = 'Course completions';
$string['user_enrolments'] = 'User Enrolments';
$string['users'] = 'Users';
$string['modules'] = 'Modules';
$string['categories'] = 'Categories';
$string['total'] = 'Total';
$string['users_overview'] = 'Users Overview';
$string['enable_time_and_visits_users_overview'] = 'Enable time spent and visits in Users Overview';
$string['disable_time_and_visits_users_overview'] = 'Disable time spent and visits in Users Overview';
$string['loading'] = 'Loading...';
$string['loading2'] = 'Please wait, loading...';
$string['enrollments'] = 'Enrollments';
$string['registrations'] = 'Registrations';
$string['participation'] = 'Participation';
$string['time'] = 'Time';
$string['enrolment_method'] = 'Enrolment Method';
$string['intelliBoard_migration_tool'] = 'IntelliBoard Migration Tool';
$string['importing_totals'] = 'Importing totals';
$string['total_numbers'] = 'Date: {$a->timepoint}, Sessions: {$a->sessions}, Visits: {$a->visits},  Time Spent: {$a->timespend}';
$string['total_numbers2'] = 'USER: {$a->userid}, Page: {$a->page}, Param:{$a->param}, Visits: {$a->visits},  Time Spent: {$a->timespend}';
$string['total_numbers3'] = '----Date: {$a->timecreated}, Track ID: {$a->trackid}, Visits: {$a->visits},  Time Spent: {$a->timespend}';
$string['logs_to_process'] = 'Logs to process {$a}';
$string['please_wait_or_cancel'] = 'Please wait to continue or <a href="{$a}">Cancel</a>';
$string['done'] = 'Done!';
$string['return_to_home'] = 'Return to home';
$string['importing_logs'] = 'Importing logs';
$string['intelliBoard_migration_tool_info'] = 'IntelliBoard migration tool is used to migrate historical data from Moodle logs table into new format. Please note, Moodle logs storing procedure will not change. Once historical data migrated to new format, historical values like \'Time Spent\' and \'Visits\' will be available for preview at IntelliBoard.net.';
$string['moodle_logs'] = 'Moodle logs';
$string['intelliboard_tracking'] = 'IntelliBoard tracking';
$string['intelliboard_logs'] = 'IntelliBoard logs';
$string['intelliboard_totals'] = 'IntelliBoard totals';
$string['intelliboard_start_tracking'] = 'IntelliBoard start tracking';
$string['total_values_include'] = 'Total Values include unique sessions, courses, visits, time spent.';
$string['items_per_query'] = 'Items per-query';
$string['import'] = 'Import';
$string['log_values_include'] = 'Log values include logs for each user per day.';
$string['powered_by'] = 'Powered by <a href="https://intelliboard.net/">IntelliBoard.net</a>';
$string['intelliboardnet'] = 'IntelliBoard.net';
$string['visits'] = 'Visits';
$string['registered'] = 'Registered';
$string['disabled'] = 'Disabled';
$string['enrolled_completed'] = 'Enrolled: {$a->courses}, Completed: {$a->completed_courses}';
$string['enrolled_users_completed'] = 'Enrolled users: {$a->users}, Completed: {$a->completed}';
$string['user_grade_avg'] = '{$a->user} grade: {$a->grade}, Average grade: {$a->avg_grade_site})';
$string['user_visit_avg'] = '{$a->user} visits: {$a->visits}, Average visits: {$a->avg_visits_site}';
$string['user_time_avg'] = '{$a->user} time: {$a->timespend}, Average time: {$a->avg_timespend_site}';
$string['more_users'] = 'More users';
$string['more_courses'] = 'More courses';
$string['showing_1_to_10'] = 'Showing 1 to 10';
$string['course_grade'] = 'Course Grade';
$string['completed_activities_resourses'] = 'Completed Activities/Resourses';
$string['save'] = 'Save';
$string['help'] = 'Need Help?';
$string['in1'] = 'Overview';
$string['in2'] = 'Current Progress';
$string['in3'] = 'Total Courses';
$string['in4'] = 'Total Learners';
$string['in5'] = 'Total Course Grades';
$string['in6'] = 'Learners Completed';
$string['in7'] = 'Learners Incomplete';
$string['in8'] = 'Learner Avg. Grade';
$string['in9'] = 'Correlations';
$string['in10'] = 'Event Utilization';
$string['in11'] = 'Learner Progress';
$string['in12'] = 'Grade Progress';
$string['in13'] = 'Time Spent (%)';
$string['in14'] = '% Progress';
$string['in15'] = 'Learner Completions';
$string['in16'] = 'Last Access';
$string['in17'] = 'Total Time Spent';
$string['in18'] = 'Total Visits';
$string['in19'] = 'Avg. Grade';
$string['in20'] = 'Return to Learners';
$string['in201'] = 'Return to Activities';
$string['in21'] = 'Course Avg. grade';
$string['in22'] = 'Enabled';
$string['in23'] = 'You have no learners to display.';
$string['in24'] = 'Module';
$string['in25'] = 'Passing Grade';
$string['in26'] = 'Learner Engagement';
$string['in34'] = 'Student Grade Progression';
$string['in27'] = 'Total Students';
$string['in28'] = 'Average Time Spent';
$string['in29'] = 'Active Students';
$string['in30'] = 'Not Active Students';
$string['in31'] = 'Activity Utilization';
$string['in32'] = 'Average time within selected period';
$string['in33'] = 'Topic Utilization';
$string['status'] = 'Status';
$string['course_category'] = 'Course Category';
$string['course_started'] = 'Course Started';
$string['total_time_spent_enrolled_learners'] = 'Total Time Spent by Enrolled Learners on Course';
$string['total_visits_enrolled_learners'] = 'Total Visits by Enrolled Learners on Course';
$string['learners_enrolled'] = 'Learners Enrolled';
$string['learners_enrolled_period'] = 'Learners enrolled within selected period';
$string['learning_progress'] = 'Learning Progress';
$string['sections'] = 'Sections';
$string['section'] = 'Section';
$string['total_activities_resources'] = 'Total Activities/Resources';
$string['completions'] = 'Completions';
$string['return_to_courses'] = 'Return to Courses';
$string['click_link_below_support_pages'] = 'Click the link below to access the IntelliBoard support pages:';
$string['support'] = 'Support';
$string['course_name'] = 'Course Name';
$string['enrolled_completed_learners'] = 'Enrolled/Completed Learners';
$string['activities_resources'] = 'Activities/Resources';
$string['actions'] = 'Actions';
$string['learner_name'] = 'Learner Name';
$string['completed_activities_resources'] = 'Completed Activities/Resources';
$string['filter_dates'] = 'Filter dates:';
$string['select_date'] = 'Select Date';
$string['select'] = 'Select';
$string['selectall'] = 'Select All';
$string['ok'] = 'OK';
$string['moodle'] = 'Moodle';
$string['totara'] = 'Totara';
$string['monitors'] = 'Monitors';
$string['cohorts'] = 'Cohorts';
$string['course_overview'] = 'Course Overview';
$string['topics'] = 'Topics';


$string['a31'] = 'Frameworks';
$string['a32'] = 'Learning Plans';
$string['a33'] = 'Rated, Proficient';
$string['a34'] = 'Rated, Not Proficient';
$string['a35'] = 'Not Rated';
$string['a36'] = 'Competency Overview';
$string['a37'] = 'A competency has not been created. Please contact your System Administrator.';
$string['a38'] = 'Courses Linked to Competencies';
$string['a39'] = 'Competency Totals';
$string['a40'] = 'Linked Courses';
$string['no_competency'] = 'Looks like you do not have competencies enabled on your Moodle site.';

$string['scalesettings'] = 'Scale settings';
$string['scales'] = 'Enable custom scale';
$string['scale_raw'] = 'Disable scale';
$string['scale_real'] = 'Show real grade instead percent';
$string['scale_total'] = 'Total Grade';
$string['scale_value'] = 'Value';
$string['scale_percentage'] = 'Percentage';

$string['a0'] = 'Competency Dashboard';
$string['a1'] = 'Competencies';
$string['a2'] = 'Proficiency';
$string['a3'] = 'Assigned Activities';
$string['a4'] = 'Proficiency Progress';
$string['a5'] = 'Rated Competencies';
$string['a6'] = '# Evidences';
$string['a7'] = 'Rated Learners';
$string['a8'] = 'Progress';
$string['a9'] = 'Proficient Learners';
$string['a10'] = 'Enrolled Learners';
$string['a11'] = 'List of competencies assigned to course';
$string['a12'] = 'Learner Status';
$string['a13'] = 'Competency Name';
$string['a14'] = 'Created On';
$string['a15'] = 'Assigned On';
$string['a16'] = 'Indiciated Proficient';
$string['a17'] = 'Rating';
$string['a18'] = 'Competencies Proficient';
$string['a19'] = 'Date Competency Rated';
$string['a20'] = 'Competency Rater';
$string['a21'] = 'Activities Assigned';
$string['a22'] = 'Proficiency Achieved';
$string['a23'] = 'Competencies Rated';
$string['a24'] = '# Evidences';
$string['a25'] = 'Completed Learners';
$string['a27'] = ' out of ';
$string['a28'] = 'Details';
$string['a29'] = 'Enable Competency Dashboard';
$string['a30'] = 'Enable Competency Reports';
$string['a26'] = 'This table displays the number of competencies assigned to a course, learners that have been rated (whether proficient or not), and learners that have been designated proficient in the competency.';
$string['s25'] = 'Time spent on activity';
$string['s45'] = 'Activity';
$string['s46'] = 'Percent of students attempting';
$string['s47'] = 'Topic';
$string['s48'] = 'Time spent on topic';

$string['completions'] = 'Activity completion status';
$string['completions_completed'] = 'Completion status (completed)';
$string['completions_pass'] = 'Completion status (pass)';
$string['completions_fail'] = 'Completion status (fail)';
$string['completions_desc'] = '1) The user has completed this activity. It is not specified whether they have passed or failed it. <br>
2) The user has completed this activity with a grade above the pass mark. <br>
3) The user has completed this activity but their grade is less than the pass mark.';

$string['widget_name27'] = "Cumulative Signups";
$string['widget_name28'] = "Engagement";
$string['widget_name29'] = "Unique Logins";
$string['widget_name30'] = "Enrollments by Course";
$string['widget_name31'] = "Registrars & Supervisor up take";
$string['role1'] = "First Role";
$string['role2'] = "Second Role";

$string['select_course'] = "Select course";
$string['select_quiz'] = "Select quiz";
$string['not_quiz'] = "Oops, it looks like you do not have any quizzes created for selected course.";
$string['enter_course_and_quiz'] = "Please select your course and quiz.";
$string['enter_quiz'] = "Please select your quiz.";
$string['analityc_3_name'] = "Quiz Overview & Question Detail";
$string['course_name_a'] = 'Course: {$a}';
$string['quiz_name_a'] = 'Quiz: {$a}';
$string['cor_incor_answers'] = 'Correct/Incorrect Answers';
$string['quiz_finished'] = 'Quiz finished';
$string['quiz_grades'] = 'Quiz grades';
$string['correct_number'] = 'Correct {$a}';
$string['incorrect_number'] = 'Incorrect {$a}';
$string['correct'] = 'Correct';
$string['incorrect'] = 'Incorrect';
$string['weekday_0'] = "Monday";
$string['weekday_1'] = "Tuesday";
$string['weekday_2'] = "Wednesday";
$string['weekday_3'] = "Thursday";
$string['weekday_4'] = "Friday";
$string['weekday_5'] = "Saturday";
$string['weekday_6'] = "Sunday";
$string['time_1'] = "Morning";
$string['time_2'] = "Afternoon";
$string['time_3'] = "Evening";
$string['time_4'] = "Off Hours";
$string['passing_score_for'] = 'Passing grade for {$a}';
$string['name'] = 'Name';
$string['answers'] = 'Answers';
$string['ques_breakdown'] = 'Question Breakdown';
$string['n17'] = 'Analytics Page';
$string['analytics'] = 'Analytics';
$string['pdf'] = 'PDF';
$string['csv'] = 'CSV';
$string['excel'] = 'Excel';

$string['grades_alt_text'] = 'Alternative text for navigation menu';
$string['course_chart'] = 'Enable course chart';
$string['course_activities'] = 'Enable course activities';
$string['filter_this_year'] = 'Time filter: This Year';
$string['filter_last_year'] = 'Time filter: Last Year';
$string['this_year'] = 'This Year';
$string['last_year'] = 'Last Year';

$string['reportselect'] = 'Please select at least one report from App.IntelliBoard.net.  Click on a Report, then Report Settings, and select it in "Visible in Moodle".';
$string['monitorselect'] = 'Please select at least one monitor from App.IntelliBoard.net.  Click on a Monitors, then Monitors Settings, and select it in "Visible in Moodle".';
$string['select_user'] = 'Select user';
$string['course_max_grade'] = 'Course max grade';

$string['no_data_notification'] = 'There is no new data for [date]';
$string['last_hour'] = 'hour';
$string['last_day'] = 'day';


$string['privacy:metadata:local_intelliboard_assign:rel'] = 'Rel type of record';
$string['privacy:metadata:local_intelliboard_assign:type'] = 'Moodle Instance Type';
$string['privacy:metadata:local_intelliboard_assign:instance'] = 'Connected Moodle Instance ID';
$string['privacy:metadata:local_intelliboard_assign:timecreated'] = 'Records Timestamp';

$string['privacy:metadata:local_intelliboard_details:logid'] = 'Table ID [local_intelliboard_logs]';
$string['privacy:metadata:local_intelliboard_details:visits'] = 'The number of visits, mouse clicks, per day';
$string['privacy:metadata:local_intelliboard_details:timespend'] = 'The amount of time spent per hour';
$string['privacy:metadata:local_intelliboard_details:timepoint'] = 'The hour';

$string['privacy:metadata:local_intelliboard_logs:trackid'] = 'The ID of the table [local_intelliboard_tracking]';
$string['privacy:metadata:local_intelliboard_logs:visits'] = 'Visits, mouse clicks, per day';
$string['privacy:metadata:local_intelliboard_logs:timespend'] = 'Timespent, per day';
$string['privacy:metadata:local_intelliboard_logs:timepoint'] = 'Timestamp of day in year';

$string['privacy:metadata:local_intelliboard_totals:sessions'] = 'Total Number of User Sessions in Moodle';
$string['privacy:metadata:local_intelliboard_totals:courses'] = 'Total Courses in Moodle';
$string['privacy:metadata:local_intelliboard_totals:visits'] = 'Total Visits by all Ssers in Moodle';
$string['privacy:metadata:local_intelliboard_totals:timespend'] = 'Total Users Timespent in Moodle';
$string['privacy:metadata:local_intelliboard_totals:timepoint'] = 'Timestamp of day in year';

$string['privacy:metadata:local_intelliboard_tracking:userid'] = 'User ID who visits Moodle Page.';
$string['privacy:metadata:local_intelliboard_tracking:courseid'] = 'Course ID that User Visits';
$string['privacy:metadata:local_intelliboard_tracking:page'] = 'Page Type [course,module,profile,site]';
$string['privacy:metadata:local_intelliboard_tracking:param'] = 'Page ID Type';
$string['privacy:metadata:local_intelliboard_tracking:visits'] = 'Users Visits on a Page';
$string['privacy:metadata:local_intelliboard_tracking:timespend'] = 'Users Timespent on a Page';
$string['privacy:metadata:local_intelliboard_tracking:firstaccess'] = 'Users First Access';
$string['privacy:metadata:local_intelliboard_tracking:lastaccess'] = 'Users Last Access';
$string['privacy:metadata:local_intelliboard_tracking:useragent'] = 'Users Browser Type';
$string['privacy:metadata:local_intelliboard_tracking:useros'] = 'Users Operating System';
$string['privacy:metadata:local_intelliboard_tracking:userlang'] = 'Users Browser Language';
$string['privacy:metadata:local_intelliboard_tracking:userip'] = 'Users Last IP address';

$string['privacy:metadata:local_intelliboard_ntf:id'] = 'Notification ID';
$string['privacy:metadata:local_intelliboard_ntf:type'] = 'Notification type';
$string['privacy:metadata:local_intelliboard_ntf:externalid'] = 'Notification ExternalNID';
$string['privacy:metadata:local_intelliboard_ntf:userid'] = 'Notification ExternalAppID';
$string['privacy:metadata:local_intelliboard_ntf:email'] = 'Notification email';
$string['privacy:metadata:local_intelliboard_ntf:subject'] = 'Notification subject';
$string['privacy:metadata:local_intelliboard_ntf:message'] = 'Notification message';
$string['privacy:metadata:local_intelliboard_ntf:state'] = 'Notification status';
$string['privacy:metadata:local_intelliboard_ntf:attachment'] = 'Notification attachment';
$string['privacy:metadata:local_intelliboard_ntf:tags'] = 'Notification tags';

$string['privacy:metadata:local_intelliboard_ntf_hst:id'] = 'Notification history ID';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationid'] = 'Notification ID';
$string['privacy:metadata:local_intelliboard_ntf_hst:userid'] = 'Notification ExternalAppID';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationname'] = 'Notification name';
$string['privacy:metadata:local_intelliboard_ntf_hst:email'] = 'Notification history email';
$string['privacy:metadata:local_intelliboard_ntf_hst:timesent'] = 'Notification history timestamp';

$string['select_manager_role'] = 'Select manager role';
$string['group_aggregation'] = 'Group aggregation';



