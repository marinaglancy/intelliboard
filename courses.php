<?php
// IntelliBoard.net
//
// IntelliBoard.net is built to work with any LMS designed in Moodle
// with the goal to deliver educational data analytics to single dashboard instantly.
// With power to turn this analytical data into simple and easy to read reports,
// IntelliBoard.net will become your primary reporting tool.
//
// Moodle
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// IntelliBoard.net is built as a local plugin for Moodle.

/**
 * IntelliBoard.net
 *
 *
 * @package    	intelliboard
 * @copyright  	2015 IntelliBoard, Inc
 * @license    	http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @created by	IntelliBoard, Inc
 * @website		www.intelliboard.net
 */
require('../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require('externallib.php');
require('locallib.php');

require_login();
require_capability('local/intelliboard:view', context_system::instance());
admin_externalpage_setup('intelliboardcourses');

$params = (object) array(
	'userid'=>0,
	'courseid'=>0,
	'timestart'=>strtotime('-6 month'),
	'timefinish'=>time()
);
$class = 'local_intelliboard_external';
$plugin = new $class();
$plugin->teacher_roles = '3,4';
$plugin->learner_roles = '5';

$data  = array(
	16 => json_encode($plugin->get_system_courses($params)),
	6 => json_encode($plugin->get_enrollments_per_course($params)),
	18 => json_encode($plugin->get_new_courses_per_day($params)),
	8 => json_encode($plugin->get_most_visited_courses($params)),
	7 => json_encode($plugin->get_most_visited_courses($params)),
	5 => json_encode($plugin->get_unique_sessions($params)),
	9 => json_encode($plugin->get_no_visited_courses($params))
);
$params = array(
	'url'=>$CFG->wwwroot,
	'email'=>$USER->email,
	'firstname'=>$USER->firstname,
	'lastname'=>$USER->lastname,
	'reports'=>get_config('local_intelliboard', 'reports'),
	'data'=>json_encode($data),
	'type'=>'courses',
	'do'=>'widgets'
);
$intelliboard = intelliboard($params);
$PAGE->set_url(new moodle_url("/local/intelliboard/courses.php"));
$PAGE->set_pagelayout('report');
$PAGE->set_pagetype('courses');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('intelliboardroot', 'local_intelliboard'));
$PAGE->set_heading(get_string('intelliboardroot', 'local_intelliboard'));
$PAGE->requires->css('/local/intelliboard/assets/css/style.css');
echo $OUTPUT->header();
?>
<script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
			  'language':'en',
              'packages':['corechart']
            }]
          }"></script>
<div class="intelliboard-page">
	<?php include("views/menu.php"); ?>
	<div class="intelliboard-content"><?php echo $intelliboard->content; ?></div>
	<?php include("views/footer.php"); ?>
</div>
<?php
echo $OUTPUT->footer();
