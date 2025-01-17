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
 * @website    https://intelliboard.net/
 */

use local_intelliboard\repositories\user_settings;

require('../../../config.php');
require_once($CFG->dirroot .'/local/intelliboard/locallib.php');
require_once($CFG->dirroot .'/local/intelliboard/instructor/lib.php');

if(!get_config('local_intelliboard', 'show_dashboard_tab')) {
    redirect(
        new \moodle_url('/local/intelliboard/instructor/courses.php')
    );
}

$action = optional_param('action', '', PARAM_ALPHANUMEXT);
$view = optional_param('view', '', PARAM_ALPHANUMEXT);
$search = clean_raw(optional_param('search', '', PARAM_RAW));
$type = optional_param('type', '', PARAM_ALPHANUMEXT);
$time = optional_param('time', 0, PARAM_INT);
$page = optional_param('page', 0, PARAM_INT);
$course = optional_param('course', 0, PARAM_INT);
$length = optional_param('length', 100, PARAM_INT);
$daterange = clean_raw(optional_param('daterange', '', PARAM_RAW));
$filter_courses = optional_param('filter_courses', '', PARAM_ALPHANUMEXT);
$settingscourses = array_keys(user_settings::getInstructorDashboardCourses($USER->id));
$instructorAllCourses = intelliboard_instructor_getcourses('', true, '', false, false);

require_login();
intelliboard_instructor_access();

if(!$action){
	$params = array('do'=>'instructor','mode'=> 2);
	$intelliboard = intelliboard($params);
	$factorInfo = chart_options();
}

if (!$daterange) {
    $timestart = strtotime('-7 days');
    $timefinish = time();

    $timestart_date = intelli_date($timestart);
    $timefinish_date = intelli_date($timefinish);

    $daterange = $timestart_date . ' to ' . $timefinish_date;
} else {
    $range = preg_split("/ (.)+ /", $daterange);

    if(isset($range[0]) && $range[0]) {
        $timestart = date_create_from_format(
            intelli_date_format(), trim($range[0])
        )->getTimestamp();
    } else {
        $timestart = strtotime('-7 days');
    }

    if(isset($range[1]) && $range[1]) {
        $timefinish = date_create_from_format(
            intelli_date_format(), trim($range[1])
        )->getTimestamp();
    } else {
        $timefinish = time();
    }

    $timestart_date = intelli_date($timestart);
    $timefinish_date = intelli_date($timefinish);
}

$PAGE->set_url(new moodle_url("/local/intelliboard/instructor/index.php", array("type"=>$type, "search"=>$search)));
$PAGE->set_pagetype('home');
$PAGE->set_pagelayout('report');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('intelliboardroot', 'local_intelliboard'));
$PAGE->set_heading(get_string('intelliboardroot', 'local_intelliboard'));
$PAGE->requires->jquery();
$PAGE->requires->js('/local/intelliboard/assets/js/flatpickr.min.js');
if(file_exists('/local/intelliboard/assets/js/flatpickr_l10n/'.current_language().'.js')) {
    $PAGE->requires->js('/local/intelliboard/assets/js/flatpickr_l10n/'.current_language().'.js');
}
$PAGE->requires->css('/local/intelliboard/assets/css/flatpickr.min.css');
$PAGE->requires->css('/local/intelliboard/assets/css/style.css');
$PAGE->requires->css('/local/intelliboard/assets/css/multiple-select.css');

if($action == 'modules'){
	$data = intelliboard_instructor_modules();
	die(json_encode($data));
}elseif ($action == 'correlations') {
	$data = intelliboard_instructor_correlations($page, $length);
	die(json_encode($data));
}

$instructor_course_shortname = get_config('local_intelliboard', 'instructor_course_shortname');
$mycourses = intelliboard_instructor_getcourses('', true, '');
$list_of_my_courses = array();

foreach($mycourses as $item){
    $list_of_my_courses[$item->id] = ($instructor_course_shortname) ? $item->shortname : $item->fullname;
}

if($course == 0){
    $course = key($list_of_my_courses);
}
if (!$course) {
	throw new moodle_exception('invalidaccess', 'error');
}

$enrolled_users = get_enrolled_users(context_course::instance($course));

$n1 = get_config('local_intelliboard', 'n1');
$n2 = get_config('local_intelliboard', 'n2');
$n3 = get_config('local_intelliboard', 'n3');
$n4 = get_config('local_intelliboard', 'n4');
$n5 = get_config('local_intelliboard', 'n5');
$n6 = get_config('local_intelliboard', 'n6');
$n7 = get_config('local_intelliboard', 'n7');
$n12 = get_config('local_intelliboard', 'n12');
$n13 = get_config('local_intelliboard', 'n13');
$n14 = get_config('local_intelliboard', 'n14');
$n15 = get_config('local_intelliboard', 'n15');
$n16 = get_config('local_intelliboard', 'n16');
$n18 = get_config('local_intelliboard', 'n18');
$raw = get_config('local_intelliboard', 'scale_raw');

$menu = array();
if($n1){
	$menu['progress'] = get_string('in11', 'local_intelliboard');
}
if($n2){
	$menu['grades'] = get_string('in12', 'local_intelliboard');
}
if($n3){
    $menu['activities'] = get_string('activity_progress', 'local_intelliboard');
}
if($n12){
    $menu['course_overview'] = get_string('course_overview', 'local_intelliboard');
}

if(empty($view)){
    $view = key($menu);
}

$summary_menu = array();
if($n5){
    $summary_menu['curent_progress'] = get_string('in2', 'local_intelliboard');
}
if($n13){
    $summary_menu['total_student'] = get_string('in27', 'local_intelliboard');
}

$stats = intelliboard_instructor_stats();
$users = intelliboard_instructor_getcourses('', false, '', true);

$courses = intelliboard_instructor_courses($view, $page, $length, $course, $daterange);

$PAGE->requires->js_call_amd(
    'local_intelliboard/instructor', 'dashboardSettings', [get_string('all_courses', 'local_intelliboard')]
);

echo $OUTPUT->header();
?>
<?php if(!isset($intelliboard) || !$intelliboard->token): ?>
	<div class="alert alert-error alert-block" role="alert"><?php echo get_string('intelliboardaccess', 'local_intelliboard'); ?></div>
<?php else: ?>
<div class="intelliboard-page intelliboard-instructor">
	<?php include("views/menu.php"); ?>
	<?php if(isset($stats->courses) and isset($stats->enrolled) and $stats->courses > 0 and $stats->enrolled > 0): ?>
	<div class="intelli-instructor-header clearfix">
        <div class="instructor-dashboard-settings-wrapper">
            <select class="instructor-courses-settings" multiple="multiple" autocomplete="off">
                <?php foreach($instructorAllCourses as $item): ?>
                    <?php if(in_array($item->id, $settingscourses)): ?>
                        <option value="<?php echo $item->id; ?>" selected="selected">
                            <?php echo $item->fullname; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $item->id; ?>">
                            <?php echo $item->fullname; ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
		<div class="instructor-head <?php echo($n5 || $n13)?'':'full'; ?>">
			<?php if($n1 or $n2 or $n3 or $n12): ?>
				<h3><?php echo get_string('in1', 'local_intelliboard'); ?></h3>
	            <div class="intelliboard-dropdown">
	                <?php foreach($menu as $key=>$value): ?>
	                    <?php if($key == $view): ?>
	                        <button><span value="<?php echo $key; ?>"><?php echo format_string($value); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
	                    <?php endif; ?>
	                <?php endforeach; ?>
	                <ul>
	                    <?php foreach($menu as $key=>$value): ?>
	                        <?php if($key != $view): ?>
	                            <li><a href="<?php echo $PAGE->url ?>&view=<?php echo $key; ?>"><?php echo format_string($value); ?></a></li>
	                        <?php endif; ?>
	                    <?php endforeach; ?>
	                </ul>
	            </div>
                <?php if($view == 'course_overview'):?>
                    <div class="intelliboard-additional-form">
                        <div class="intelliboard-dropdown">
                            <?php foreach($list_of_my_courses as $key=>$value): ?>
                                <?php if($key == $course): ?>
                                    <button><span value="<?php echo $key; ?>"><?php echo format_string($value); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <ul>
                                <?php foreach($list_of_my_courses as $key=>$value): ?>
                                    <?php if($key != $course): ?>
                                        <li><a href="<?php echo $PAGE->url ?>&view=<?php echo $view; ?>&course=<?php echo $key; ?>"><?php echo format_string($value); ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="switcher clearfix">
                            <a href="#" data-view="activity" class="active"><?php echo get_string('s45', 'local_intelliboard'); ?></a>
                            <a href="#" data-view="topic" class=""><?php echo get_string('topics', 'local_intelliboard'); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="intelliboard-additional-form">
                    <input type="text" id="chart-daterange" class="daterange flatpickr-input form-control" name="daterange" title="<?php echo get_string('filter_dates','local_intelliboard');?>" readonly="readonly" placeholder="<?php echo get_string('select_date','local_intelliboard');?>">
                </div>
                <div class="clearfix"></div>
	            <div id="instructor-chart<?php echo ($view)?"-".$view:""; ?>" class="instructor-chart area"></div>
            <?php endif; ?>
            <?php if($n4): ?>
			<ul class="instructor-total">
				<li>
					<strong><?php echo (int)$stats->courses; ?></strong>
					<?php echo get_string('in3', 'local_intelliboard'); ?>
				</li>
				<li>
					<strong><?php echo ($users) ? $users : (int)$stats->enrolled; ?></strong>
					<?php echo get_string('in4', 'local_intelliboard'); ?>
				</li>
				<li>
					<strong><?php echo (int)$stats->grades; ?></strong>
					<?php echo get_string('in5', 'local_intelliboard'); ?>
				</li>
			</ul>
			<?php endif; ?>
		</div>
		<?php if($n5 || $n13): ?>
		<div class="summary clearfix">
            <div class="intelliboard-dropdown">
                <button><i class="ion-android-arrow-dropdown"></i></button>
                <ul>
                    <?php foreach($summary_menu as $key=>$value): ?>
                        <li><a href="#" data-tab="<?php echo $key;?>"><?php echo format_string($value); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php if($n5): ?>
            <div class="summary-item curent_progress">
                <h3><?php echo get_string('in2', 'local_intelliboard'); ?></h3>

                <div class="summary-chart-wrap">
                    <span class="summary-chart-label"><?php echo  intval(($stats->completed / $stats->enrolled) * 100); ?>%
                        <i><?php echo get_string('progress', 'local_intelliboard'); ?></i>
                    </span>
                    <div id="summary-chart" class="summary-chart" ></div>
                </div>
                <ul class="instructor-summary  clearfix">
                    <li>
                        <?php echo get_string('in6', 'local_intelliboard'); ?>
                        <strong><?php echo (int)$stats->completed; ?></strong>
                    </li>
                    <li>
                        <?php echo get_string('in7', 'local_intelliboard'); ?>
                        <strong><?php echo intval($stats->enrolled) - intval($stats->completed); ?></strong>
                    </li>
                    <li>
                        <?php echo get_string('in8', 'local_intelliboard'); ?>
                        <strong><?php echo (int)$stats->grade; ?></strong>
                    </li>
                </ul>
            </div>
            <?php endif;?>

            <?php if($n13): ?>
            <div class="summary-item total_student" style="display: none;">
                <h3><?php echo get_string('in27', 'local_intelliboard'); ?></h3>

                <div class="filter-box">
                    <input type="text" id="summary-student-daterange" class="daterange flatpickr-input form-control" name="daterange" title="<?php echo get_string('filter_dates','local_intelliboard');?>" readonly="readonly" placeholder="<?php echo get_string('select_date','local_intelliboard');?>">
                </div>
                <div class="summary-chart-wrap">
                    <span class="summary-chart-label"><span id="summary-chart-label">0</span>
                        <i><?php echo get_string('in29', 'local_intelliboard'); ?></i>
                    </span>
                    <div id="summary-users-chart" class="summary-users-chart" ></div>
                    <div id="summary-users-list" class="summary-users-list">
                        <h3 class="title"></h3>
                        <span class="close"><i class="ion-android-close"></i></span>
                        <ul></ul>
                    </div>
                </div>
                <ul class="instructor-summary  clearfix">
                    <li>
                        <?php echo get_string('learners_enrolled_period', 'local_intelliboard'); ?>:
                        <strong id="total-student-number">-</strong>
                    </li>
                    <li>
                        <?php echo get_string('in32', 'local_intelliboard'); ?>:
                        <strong id="avg-timespent-number">-</strong>
                    </li>
                </ul>
            </div>
            <?php endif;?>
		</div>
		<?php endif; ?>
	</div>

	<div class="intelliboard-box">
		<?php if($n6 || $n14 || $n18): ?>
		<div class="box<?php echo($n7 || $n15 || $n16)?'50':'100'; ?> pull-left h410">
			<ul class="nav nav-tabs clearfix">
                <?php if($n6): ?>
	            <li role="presentation" class="nav-item" data-tab="chart4"><a class="nav-link active" href="#"><?php echo get_string('in9', 'local_intelliboard'); ?></a></li>
                <?php endif; ?>
                <?php if($n14): ?>
	            <li role="presentation" class="nav-item" data-tab="chart5"><a class="nav-link" href="#"><?php echo get_string('in26', 'local_intelliboard'); ?></a></li>
                <?php endif; ?>
                <?php if($n18): ?>
	            <li role="presentation" class="nav-item" data-tab="chart7"><a class="nav-link" href="#"><?php echo get_string('in34', 'local_intelliboard'); ?></a></li>
                <?php endif; ?>
	        </ul>
	        <div class="card-block">
                <?php if($n6): ?>
	        	<div id="chart4" class="chart-tab active"><?php echo get_string('loading', 'local_intelliboard'); ?></div>
                <?php endif; ?>
                <?php if($n14): ?>
	        	<div id="chart5" class="chart-tab" style="display: none;">
                    <div class="filter-box clearfix">
                        <input type="text" class="form-control daterange flatpickr-input" name="daterange" title="<?php echo get_string('filter_dates','local_intelliboard');?>" readonly="readonly" placeholder="<?php echo get_string('select_date','local_intelliboard');?>">

                        <div class="intelliboard-dropdown">
                            <?php foreach($list_of_my_courses as $key=>$value): ?>
                                <?php if($key == $course): ?>
                                    <button value="<?php echo $key; ?>"><span><?php echo format_string($value); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <ul>
                                <?php foreach($list_of_my_courses as $key=>$value): ?>
                                        <li><a href="#" dava-value="<?php echo $key; ?>"><?php echo format_string($value); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div id="chart5_area" class="area"><?php echo get_string('loading', 'local_intelliboard'); ?></div>
                </div>
                <?php endif; ?>
                <?php if($n18): ?>
	        	<div id="chart7" class="chart-tab" style="display: none;">
                    <div class="filter-box clearfix">
                        <div class="intelliboard-dropdown courses">
                            <?php foreach($list_of_my_courses as $key=>$value): ?>
                                <?php if($key == $course): ?>
                                    <button value="<?php echo $key; ?>"><span><?php echo format_string($value); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <ul>
                                <?php foreach($list_of_my_courses as $key=>$value): ?>
                                        <li><a href="#" dava-value="<?php echo $key; ?>"><?php echo format_string($value); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="intelliboard-dropdown users">
                            <button value="0"><span><?php echo get_string('select_user', 'local_intelliboard'); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
                            <ul>
                                <?php foreach($enrolled_users as $key=>$value): ?>
                                    <li><a href="#" dava-value="<?php echo $key; ?>"><?php echo fullname($value); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div id="chart7_area" class="area custom-tooltip"><p class="alert alert-warning"><?php echo get_string('select_user', 'local_intelliboard'); ?></p></div>
                </div>
                <?php endif; ?>
	        </div>
		</div>
		<?php endif; ?>
		<?php if($n7 || $n15 || $n16): ?>
		<div class="box<?php echo($n6 || $n14)?'40':'100'; ?> pull-right h410">
			<ul class="nav nav-tabs clearfix">
                <?php if($n7): ?>
	            <li role="presentation" class="nav-item" data-tab="chart2"><a class="nav-link active" href="#"><?php echo get_string('in10', 'local_intelliboard'); ?></a></li>
                <?php endif; ?>
                <?php if($n15): ?>
	            <li role="presentation" class="nav-item" data-tab="chart3"><a class="nav-link" href="#"><?php echo get_string('in31', 'local_intelliboard'); ?></a></li>
                <?php endif; ?>
                <?php if($n16): ?>
	            <li role="presentation" class="nav-item" data-tab="chart6"><a class="nav-link" href="#"><?php echo get_string('in33', 'local_intelliboard'); ?></a></li>
                <?php endif; ?>
	        </ul>
	        <div class="card-block">
                <?php if($n7): ?>
	        	<div id="chart2" class="chart-tab active"><?php echo get_string('loading', 'local_intelliboard'); ?></div>
                <?php endif; ?>
                <?php if($n15): ?>
	        	<div id="chart3" class="chart-tab" style="display: none;">
                    <div class="filter-box clearfix">
                        <input type="text" class="daterange form-control flatpickr-input" name="daterange" title="<?php echo get_string('filter_dates','local_intelliboard');?>" readonly="readonly" placeholder="<?php echo get_string('select_date','local_intelliboard');?>">

                        <div class="intelliboard-dropdown">
                            <?php foreach($list_of_my_courses as $key=>$value): ?>
                                <?php if($key == $course): ?>
                                    <button value="<?php echo $key; ?>"><span><?php echo format_string($value); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <ul>
                                <?php foreach($list_of_my_courses as $key=>$value): ?>
                                    <li><a href="#" dava-value="<?php echo $key; ?>"><?php echo format_string($value); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div id="chart3_area" class="area"><?php echo get_string('loading', 'local_intelliboard'); ?></div>
                </div>
                <?php endif; ?>
                <?php if($n16): ?>
	        	<div id="chart6" class="chart-tab" style="display: none;">
                    <div class="filter-box clearfix">
                        <input type="text" class="daterange form-control flatpickr-input" name="daterange" title="<?php echo get_string('filter_dates','local_intelliboard');?>" readonly="readonly" placeholder="<?php echo get_string('select_date','local_intelliboard');?>">

                        <div class="intelliboard-dropdown">
                            <?php foreach($list_of_my_courses as $key=>$value): ?>
                                <?php if($key == $course): ?>
                                    <button value="<?php echo $key; ?>"><span><?php echo format_string($value); ?></span> <i class="ion-android-arrow-dropdown"></i></button>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <ul>
                                <?php foreach($list_of_my_courses as $key=>$value): ?>
                                    <li><a href="#" dava-value="<?php echo $key; ?>"><?php echo format_string($value); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div id="chart6_area" class="area"><?php echo get_string('loading', 'local_intelliboard'); ?></div>
                </div>
                <?php endif; ?>
	        </div>
		</div>

        <div class="box100 pull-left">
            <div class="card-block">
                <div id="chart8" class="chart-tab">
                    <div class="filter-box clearfix">
                        <div class="intelliboard-dropdown">
                            <?php foreach($list_of_my_courses as $key=>$value): ?>
                                <?php if($key == $course): ?>
                                    <button value="<?php echo $key; ?>">
                                        <span><?php echo format_string($value); ?></span>
                                        <i class="ion-android-arrow-dropdown"></i>
                                    </button>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <ul>
                                <?php foreach($list_of_my_courses as $key=>$value): ?>
                                    <li>
                                        <a href="#" dava-value="<?php echo $key; ?>">
                                            <?php echo format_string($value); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="export-box">
                            <?php include("../views/export_filter.php"); ?>
                        </div>
                    </div>
                    <h4><?php echo get_string('grade_activities_overview', 'local_intelliboard'); ?></h4>
                    <div id="chart8_area" class="area">
                        <?php echo get_string('loading', 'local_intelliboard'); ?>
                    </div>
                </div>
            </div>
        </div>

		<?php endif; ?>
	</div>
	<script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'language': '<?php echo current_language(); ?>',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.intelliboard-dropdown button').click(function(e){
				if(jQuery(this).parent().hasClass('disabled')){
					return false;
				}
				jQuery(this).parent().find('ul').toggle();
			});

			jQuery('.nav-tabs .nav-item').click(function (e) {
			    e.preventDefault();
                var parent = jQuery(this).parent();
                var container = jQuery(parent).parent();
                var tab = jQuery(this).attr('data-tab');

                jQuery(parent).children('.nav-item').removeClass('active');
                jQuery(parent).children('.nav-item').children('.nav-link').removeClass('active');

                jQuery(this).addClass('active');
                jQuery(this).children('.nav-link').addClass('active');

                jQuery(container).children('.card-block').children('.chart-tab').hide();
                jQuery('#'+tab).show();
            });

            jQuery("#summary-student-daterange").flatpickr({
                mode: "range",
                dateFormat: "<?php echo intelli_date_format(); ?>",
                locale: '<?php echo current_language(); ?>',
                static: true,
                defaultDate: ["<?php echo $timestart_date; ?>", "<?php echo $timefinish_date; ?>"],
                onClose: function(selectedDates, dateStr, instance) {
                    summary_student_daterange_change();
                }
            });

            jQuery('.summary .intelliboard-dropdown ul li a').click(function () {
                var tab = jQuery(this).attr('data-tab');
                jQuery('.summary .summary-item').hide();
                jQuery('.summary .summary-item.'+tab).show();
                jQuery('.summary .intelliboard-dropdown ul').hide();

                summary_student_daterange_change();
            });
            jQuery('.summary .intelliboard-dropdown ul li:first-child a').click();

            jQuery("#chart5 .daterange").flatpickr({
                mode: "range",
                dateFormat: "<?php echo intelli_date_format(); ?>",
                locale: '<?php echo current_language(); ?>',
                defaultDate: ["<?php echo $timestart_date; ?>", "<?php echo $timefinish_date; ?>"],
                onClose: function(selectedDates, dateStr, instance) {
                    load_engagement_chart();
                }
            });
            jQuery('#chart5 .intelliboard-dropdown a').click(function (e) {
                e.preventDefault();
                jQuery('#chart5 .intelliboard-dropdown button span').html(jQuery(this).html());
                jQuery('#chart5 .intelliboard-dropdown button').val(jQuery(this).attr('dava-value'));
                jQuery('#chart5 .intelliboard-dropdown ul').hide();
                load_engagement_chart();
            });
            jQuery('.nav-item[data-tab="chart5"]').click(function (e) {
                load_engagement_chart();
            });

            jQuery('#chart8 .intelliboard-dropdown a').click(function (e) {
                e.preventDefault();
                jQuery('#chart8 .intelliboard-dropdown button span').html(jQuery(this).html());
                jQuery('#chart8 .intelliboard-dropdown button').val(jQuery(this).attr('dava-value'));
                jQuery('#chart8 .intelliboard-dropdown ul').hide();
                load_graded_activities_overview_chart();
            });

            jQuery('#chart7 .intelliboard-dropdown.courses a').click(function (e) {
                e.preventDefault();
                var course = jQuery(this).attr('dava-value');
                jQuery('#chart7 .intelliboard-dropdown.courses button span').html(jQuery(this).html());
                jQuery('#chart7 .intelliboard-dropdown.courses button').val(course);
                jQuery('#chart7 .intelliboard-dropdown.courses ul').hide();
                jQuery('#chart7 .intelliboard-dropdown.users button span').html('<?php echo intellitext(get_string('select_user', 'local_intelliboard')); ?>');

                load_chart7_users_list(course);
            });
            var course = jQuery('#chart7 .intelliboard-dropdown.courses button').val();
            load_chart7_users_list(course);

            $("#chart7 .intelliboard-dropdown.users").on("click", "a", function(e){
                e.preventDefault();
                var user = jQuery(this).attr('dava-value');
                var course = jQuery('#chart7 .intelliboard-dropdown.courses button').val();

                jQuery('#chart7 .intelliboard-dropdown.users button span').html(jQuery(this).html());
                jQuery('#chart7 .intelliboard-dropdown.users button').val(user);
                jQuery('#chart7 .intelliboard-dropdown.users ul').hide();

                jQuery.ajax({
                    url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_student_grade_progression&user="+user+"&course="+course,
                    dataType: "json"
                }).done(function( response ) {
                    if(response.length<2){
                        $('#chart7_area').html("<p class='alert alert-warning'><?php echo intellitext(get_string('no_data','local_intelliboard'));?></p>");
                    }else {
                        for (var i = 1; i < response.length; i++) {
                            response[i][0] = new Date(response[i][0] * 1000);
                        }

                        var data = google.visualization.arrayToDataTable(response);
                        var options = <?php echo format_string($factorInfo->GradeProgression); ?>;
                        options.vAxis.format = '#';
                        options.vAxis.title = '<?php echo intellitext(get_string('grade', 'local_intelliboard'));?> <?php echo((!$raw)?'(' . intellitext(get_string("scale_percentage", "local_intelliboard")) . ')':'');?>';
                        var chart = new google.visualization.LineChart(document.getElementById('chart7_area'));
                        chart.draw(data, options);
                    }
                });
            });

            jQuery("#chart3 .daterange").flatpickr({
                mode: "range",
                dateFormat: "<?php echo intelli_date_format(); ?>",
                locale: '<?php echo current_language(); ?>',
                defaultDate: ["<?php echo $timestart_date; ?>", "<?php echo $timefinish_date; ?>"],
                onClose: function(selectedDates, dateStr, instance) {
                    load_module_utilization_chart();
                }
            });
            jQuery('#chart3 .intelliboard-dropdown a').click(function (e) {
                e.preventDefault();
                jQuery('#chart3 .intelliboard-dropdown button span').html(jQuery(this).html());
                jQuery('#chart3 .intelliboard-dropdown button').val(jQuery(this).attr('dava-value'));
                jQuery('#chart3 .intelliboard-dropdown ul').hide();
                load_module_utilization_chart();
            });
            jQuery('.nav-item[data-tab="chart3"]').click(function (e) {
                load_module_utilization_chart();
            });

            jQuery("#chart6 .daterange").flatpickr({
                mode: "range",
                dateFormat: "<?php echo intelli_date_format(); ?>",
                locale: '<?php echo current_language(); ?>',
                defaultDate: ["<?php echo $timestart_date; ?>", "<?php echo $timefinish_date; ?>"],
                onClose: function(selectedDates, dateStr, instance) {
                    load_topic_utilization_chart();
                }
            });
            jQuery('#chart6 .intelliboard-dropdown a').click(function (e) {
                e.preventDefault();
                jQuery('#chart6 .intelliboard-dropdown button span').html(jQuery(this).html());
                jQuery('#chart6 .intelliboard-dropdown button').val(jQuery(this).attr('dava-value'));
                jQuery('#chart6 .intelliboard-dropdown ul').hide();
                load_topic_utilization_chart();
            });
            jQuery('.nav-item[data-tab="chart6"]').click(function (e) {
                load_topic_utilization_chart();
            });


            jQuery('.nav-tabs .nav-item:first-child').click();

            <?php if($view == 'course_overview'): ?>
                jQuery('.intelliboard-additional-form .switcher a').click(function (e) {
                    jQuery('.intelliboard-additional-form .switcher a').removeClass('active');
                    jQuery(this).addClass('active');

                    drawInsructorChart();
                });
            <?php endif; ?>

            jQuery("#chart-daterange").flatpickr({
                mode: "range",
                dateFormat: "<?php echo intelli_date_format(); ?>",
                locale: '<?php echo current_language(); ?>',
                <?php if(!empty($daterange)):?>
                defaultDate: ["<?php echo $timestart_date; ?>", "<?php echo $timefinish_date; ?>"],
                <?php endif;?>
                onClose: function(selectedDates, dateStr, instance) {
                    if(jQuery('#chart-daterange').val() == ''){
                        return;
                    }
                    <?php if($view == 'course_overview'): ?>
                        drawInsructorChart();
                    <?php else: ?>
                        var href = removeParam('daterange', window.location.search);
						if(href == '?'){
							href = '';
						}
						if(href != ''){
							href = href+'&';
						}
						href = href+'daterange='+jQuery('#chart-daterange').val();
                        window.location = window.location.pathname+'?'+href;
                    <?php endif; ?>
                }
            });

		});

		function removeParam(key, sourceURL) {
			var rtn = sourceURL.split("?")[0],
				param,
				params_arr = [],
				queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
			if (queryString !== "") {
				params_arr = queryString.split("&");
				for (var i = params_arr.length - 1; i >= 0; i -= 1) {
					param = params_arr[i].split("=")[0];
					if (param === key) {
						params_arr.splice(i, 1);
					}
				}
				rtn = rtn + "?" + params_arr.join("&");
			}
			return rtn;
		}

		<?php if($n7): ?>
       	google.setOnLoadCallback(LearningProgress);
        function LearningProgress() {
        	jQuery.ajax({
				url: "<?php echo $PAGE->url; ?>&action=modules",
				dataType: "json"
			}).done(function( response ) {
				var data = google.visualization.arrayToDataTable(response);
	            var options = <?php echo format_string($factorInfo->LearningProgressCalculation); ?>;
	            var chart = new google.visualization.PieChart(document.getElementById('chart2'));
	            chart.draw(data, options);
			});
        }
        <?php endif; ?>

        <?php if($n6): ?>
        google.setOnLoadCallback(Correlations);
        function Correlations() {
        	jQuery.ajax({
				url: "<?php echo $PAGE->url; ?>&action=correlations",
				dataType: "json"
			}).done(function( response ) {
				//response = JSON.parse(response)
				var data = new google.visualization.DataTable();
	            data.addColumn('number', '<?php echo intellitext(get_string('grade', 'local_intelliboard')); ?>');
	            data.addColumn('number', '<?php echo intellitext(get_string('in13', 'local_intelliboard')); ?>');
	            data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
	            data.addRows(response);
	            var options = <?php echo format_string($factorInfo->CorrelationsCalculation); ?>;
	            var chart = new google.visualization.ScatterChart(document.getElementById('chart4'));
	            chart.draw(data, options);
			});
        }
        <?php endif; ?>

        <?php if($n5): ?>
		google.setOnLoadCallback(progressChart);
		function progressChart() {
			var data = google.visualization.arrayToDataTable([
				['<?php echo intellitext(get_string('completed', 'local_intelliboard')); ?>', '<?php echo intellitext(get_string('incomplete', 'local_intelliboard')); ?>'],
				['<?php echo intellitext(get_string('completed', 'local_intelliboard')); ?>', <?php echo $stats->completed; ?>],
				['<?php echo intellitext(get_string('incomplete', 'local_intelliboard')); ?>', <?php echo $stats->enrolled - $stats->completed; ?>]
			]);
			var options = {
			chartArea: {width: '100%',height: '90%',},
			  pieHole: 0.8,
			  pieSliceTextStyle: {
			    color: 'transparent',
			  },
			  colors:['#1db34f','#e74c3c'],
			  legend: 'none'
			};
			var chart = new google.visualization.PieChart(document.getElementById('summary-chart'));
			chart.draw(data, options);
		}
		<?php endif; ?>

		google.setOnLoadCallback(drawInsructorChart);
		function drawInsructorChart() {
			var options = {
				title:'',
				legend:{position: 'top', alignment: 'end'},
				vAxis: {title:'<?php echo intellitext(get_string('learners', 'local_intelliboard')); ?>'},
				hAxis:{textPosition: 'none', title:'<?php echo intellitext(get_string('courses')); ?>'},
				seriesType:'bars',
				series:{1:{type:'line'}},
				chartArea:{width:'90%',height: '76%',right:10 },
				colors:['#1d7fb3', '#1db34f'],
				backgroundColor:{fill:'transparent'}
			};
			<?php if($view == 'grades'): ?>
				options.vAxis.title = "<?php echo intellitext(get_string('in19', 'local_intelliboard')); ?>";
				var data = google.visualization.arrayToDataTable([
				['Course', '<?php echo intellitext(get_string('in19', 'local_intelliboard')); ?>', '<?php echo intellitext(get_string('in25', 'local_intelliboard')); ?>'],
				<?php foreach($courses as $row):  ?>
				['<?php echo addslashes(format_string($row->fullname)); ?>', {v: <?php echo (int)$row->data1_percent; ?>, f: '<?php echo $row->data1; ?>'}, <?php echo (int)$row->data2; ?>],
				<?php endforeach; ?>
				]);
	        <?php elseif($view == 'activities'): ?>
	        	options.vAxis.title = "<?php echo intellitext(get_string('in14', 'local_intelliboard')); ?>";
	        	options.vAxis.minValue = 0;
	        	options.vAxis.maxValue = 1;
	        	options.vAxis.format = 'percent';

	        	<?php if(count($courses)): ?>
                    var data = google.visualization.arrayToDataTable([
                    ['<?php echo intellitext(get_string('course')); ?>', '<?php echo intellitext(get_string('in15', 'local_intelliboard')); ?>'],
                    <?php foreach($courses as $row): ?>
                    ['<?php echo addslashes(format_string($row->fullname)); ?>', {v: <?php echo $row->data1 / 100; ?>, f: '<?php echo (int)$row->data1; ?>%'} ],
                    <?php endforeach; ?>
                    ]);
                <?php else: ?>
                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo intellitext(get_string('course')); ?>', '<?php echo intellitext(get_string('in15', 'local_intelliboard')); ?>'],
                        ['', {v: 0, f: 0}]
                    ]);
                <?php endif; ?>
	        <?php elseif($view == 'course_overview'): ?>
                jQuery('#instructor-chart<?php echo ($view)?"-".$view:""; ?>').html('<?php echo intellitext(get_string('loading', 'local_intelliboard')); ?>');
	        	options.vAxis.textPosition = 'none';
	        	options.tooltip = {isHtml: true};
	        	options.chartArea.width = '95%';

                //var course = jQuery('#chart5 .intelliboard-dropdown button').val();
                var chart = new google.visualization.ComboChart(document.getElementById('instructor-chart<?php echo ($view)?"-".$view:""; ?>'));
                var view = jQuery('.intelliboard-additional-form .switcher a.active').attr('data-view');
                var daterange = jQuery('#chart-daterange').val();
                jQuery.ajax({
                    url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_course_overview&view="+view+"&course=<?php echo $course;?>&daterange="+daterange,
                    dataType: "json"
                }).done(function( response ) {
                    if(view == 'activity'){
                        options.vAxis.title = "<?php echo intellitext(get_string('s25', 'local_intelliboard')); ?>";
                        options.hAxis.title = "<?php echo intellitext(get_string('s45', 'local_intelliboard')); ?>";
                    }else{
                        options.vAxis.title = "<?php echo intellitext(get_string('s48', 'local_intelliboard')); ?>";
                        options.hAxis.title = "<?php echo intellitext(get_string('s47', 'local_intelliboard')); ?>";
                    }
                    var data = google.visualization.arrayToDataTable(response);

                    chart.draw(data, options);
                });
                return;
	        <?php else: ?>
	        	var data = google.visualization.arrayToDataTable([
	        	['<?php echo intellitext(get_string('course')); ?>', '<?php echo intellitext(get_string('enrolled', 'local_intelliboard')); ?>', '<?php echo intellitext(get_string('completed', 'local_intelliboard')); ?>'],
	        	<?php foreach($courses as $row): ?>
				['<?php echo addslashes(format_string($row->fullname)); ?>', <?php echo (int)$row->data1; ?>, <?php echo (int)$row->data2; ?>],
				<?php endforeach; ?>
				]);
	        <?php endif; ?>
			//var options = <?php echo $factorInfo->CourseProgressCalculation; ?>;
			var chart = new google.visualization.ComboChart(document.getElementById('instructor-chart<?php echo ($view)?"-".$view:""; ?>'));
			chart.draw(data, options);
			jQuery('.intelliboard-origin-head a:first').trigger('click');
		}

        google.setOnLoadCallback(load_graded_activities_overview_chart);
        function load_graded_activities_overview_chart() {
            var course = jQuery('#chart8 .intelliboard-dropdown button').val();
            jQuery.ajax({
                url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=graded_activities_overview&course="+course,
                dataType: "json"
            }).done(function(response) {
                let data = google.visualization.arrayToDataTable(response);
                let options = <?php echo format_string($factorInfo->GradeActivitiesOverview); ?>;
                options.title = '<?php echo intellitext(
                    get_string('grade_activities_overview', 'local_intelliboard')
                );?>';
                let chart = new google.visualization.ColumnChart(
                    document.getElementById('chart8_area')
                );
                chart.draw(data, options);
            });
        }

		function load_engagement_chart() {
            var daterange = jQuery('#chart5 .daterange').val();
            var course = jQuery('#chart5 .intelliboard-dropdown button').val();
            jQuery.ajax({
                url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_learner_engagement&daterange="+daterange+"&course="+course,
                dataType: "json"
            }).done(function( response ) {
                var data = google.visualization.arrayToDataTable(response);
                var options = <?php echo format_string($factorInfo->CorrelationsCalculation); ?>;
                options.vAxis.format = '#%';
                options.vAxis.title = '<?php echo intellitext(get_string('s46', 'local_intelliboard'));?>';
                var chart = new google.visualization.AreaChart(document.getElementById('chart5_area'));
                chart.draw(data, options);
            });
        }

		function load_module_utilization_chart() {
            var daterange = jQuery('#chart3 .daterange').val();
            var course = jQuery('#chart3 .intelliboard-dropdown button').val();
            jQuery.ajax({
                url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_module_utilization&daterange="+daterange+"&course="+course,
                dataType: "json"
            }).done(function( response ) {
                if(response.length > 0) {
                    var data = google.visualization.arrayToDataTable(response);
                    var options = <?php echo format_string($factorInfo->LearningProgressCalculation); ?>;
                    options.height = 270;
                    options.tooltip = {isHtml: true};
                    var chart = new google.visualization.PieChart(document.getElementById('chart3_area'));
                    chart.draw(data, options);
                }else{
                    jQuery('#chart3_area').html('<?php echo $OUTPUT->box(get_string('no_data', 'local_intelliboard'), 'generalbox alert');?>');
                }
            });
        }

		function load_topic_utilization_chart() {
            var daterange = jQuery('#chart6 .daterange').val();
            var course = jQuery('#chart6 .intelliboard-dropdown button').val();
            jQuery.ajax({
                url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_topic_utilization&daterange="+daterange+"&course="+course,
                dataType: "json"
            }).done(function( response ) {
                if(response.length > 0) {
                    var data = google.visualization.arrayToDataTable(response);
                    var options = <?php echo format_string($factorInfo->LearningProgressCalculation); ?>;
                    options.height = 270;
                    options.tooltip = {isHtml: true};
                    var chart = new google.visualization.PieChart(document.getElementById('chart6_area'));
                    chart.draw(data, options);
                }else{
                    jQuery('#chart6_area').html('<?php echo $OUTPUT->box(get_string('no_data', 'local_intelliboard'), 'generalbox alert');?>');
                }
            });
        }

        function summary_student_daterange_change() {
            var daterange = jQuery('#summary-student-daterange').val();
            jQuery.ajax({
                url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_total_students&daterange="+daterange,
                dataType: "json"
            }).done(function( response ) {
                jQuery('#avg-timespent-number').html(response.avg_timespend);
                jQuery('#total-student-number').html(response.enrolled_users);
                jQuery('#summary-chart-label').html(response.active_users);
                jQuery('#summary-users-chart').hide();


                if(response.total_users>0) {
                    jQuery('#summary-users-chart').show();
                    var data = [
                        ['<?php echo intellitext(get_string('total', 'local_intelliboard')); ?>', '<?php echo intellitext(get_string('in27', 'local_intelliboard')); ?>'],
                        ['<?php echo intellitext(get_string('in29', 'local_intelliboard')); ?>', Number(response.active_users)],
                        ['<?php echo intellitext(get_string('in30', 'local_intelliboard')); ?>', response.total_users - response.active_users],
                    ];
                    data = google.visualization.arrayToDataTable(data);
                    var options = {
                        chartArea: {width: '100%',height: '90%',},
                        pieHole: 0.8,
                        pieSliceTextStyle: {
                            color: 'transparent',
                        },
                        colors:['#1db34f','#e74c3c'],
                        legend: 'none'
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('summary-users-chart'));
                    google.visualization.events.addListener(chart, 'select', function () {
                        var selectedItem = chart.getSelection()[0];
                        if(selectedItem.row == 1){
                            $('#summary-users-list ul').html(response.users.not_active);
                            $('#summary-users-list .title').html('<?php echo intellitext(get_string('in30', 'local_intelliboard')); ?>');
                        }else{
                            $('#summary-users-list ul').html(response.users.active);
                            $('#summary-users-list .title').html('<?php echo intellitext(get_string('in29', 'local_intelliboard')); ?>');
                        }
                        $('#summary-users-list').addClass('visible');
                    });
                    chart.draw(data, options);
                }
            });

            $('#summary-users-list .close').click(function () {
                $('#summary-users-list').removeClass('visible');
            });
        }

        function load_chart7_users_list(course) {
            jQuery.ajax({
                url: "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?action=get_course_users&course="+course,
                dataType: "json"
            }).done(function( response ) {
                jQuery('#chart7 .intelliboard-dropdown.users ul').html(response.items);
            });
        }

        $('#chart8 .report-export-panel a').on('click', function(e) {
            e.preventDefault();
            let format = $(this).attr('data-format');
            let course = $('#chart8 .intelliboard-dropdown button').val();
            let params = [
                'export=1', 'action=graded_activities_overview', 'course=' + course,
                'format=' + format
            ];
            window.location.replace(
                "<?php echo $CFG->wwwroot; ?>/local/intelliboard/instructor/ajax.php?" + params.join('&')
            );
        });
		</script>
		<?php else: ?>
			<br>
			<div class="alert alert-info alert-block"><?php echo get_string('in23', 'local_intelliboard'); ?></div>
		<?php endif; ?>
	<?php include("../views/footer.php"); ?>
</div>

<?php endif; ?>
<?php echo $OUTPUT->footer();
