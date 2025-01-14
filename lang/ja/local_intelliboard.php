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

$string['pluginname'] = 'インテリボード.netプラグイン';
$string['tracking_title'] = '時間トラッキング';
$string['tracking'] = 'セッショントラッキング';
$string['dashboard'] = 'ダッシュボード';
$string['settings'] = '設定';
$string['adv_settings'] = '詳細設定';
$string['intelliboardroot'] = 'インテリボード';
$string['report'] = 'レポート';
$string['reports'] = 'レポート';
$string['learners'] = '学習者';
$string['courses'] = 'コース';
$string['load'] = 'パフォーマンス';
$string['inactivity'] = '非アクティブ';
$string['inactivity_desc'] = 'ユーザーの非アクティブ時間（秒）';
$string['ajax'] = '頻度';
$string['ajax_desc'] = 'セッションをAJAX経由で保存しています。 0 - AJAX無効（秒） ';
$string['enabled'] = '有効なトラッキング';
$string['enabled_desc'] = 'トラッキングを有効にする';
$string['trackadmin'] = 'トラッキング管理者';
$string['logs'] = 'マイグレーションツール';
$string['trackadmin_desc'] = '管理者の追跡を有効にする（推奨しません）';
$string['intelliboard:instructors'] = 'インテリボード [インストラクター]';
$string['intelliboard:students'] = 'インテリボード [学習者]';
$string['intelliboard:view'] = 'インテリボード [ビュー]';
$string['intelliboard:manage'] = 'インテリボード [管理]';
$string['intelliboard:competency'] = 'インテリボード [コンピテンシー]';
$string['tls12'] = 'TLS v1.2';
$string['tls12_desc'] = '詳細設定:TLS v1.2';
$string['sso'] = 'SSOリンク';
$string['sso_desc'] = 'インテリボード.netへのSSOリンク';
$string['ssomenu'] = 'SSO menu item';
$string['ssomenu_desc'] = 'SSO Link in navigation menu (for admins only)';
$string['api'] = '代替API';
$string['api_desc'] = '代替APIサーバを使用する（ファイアウォールのブロックを避けるため）';
$string['server'] = 'インテリボードサーバー';
$string['server_usa'] = 'インテリボード USA';
$string['server_au'] = 'インテリボードオーストラリア';
$string['server_eu'] = 'インテリボードヨーロッパ';
$string['filters'] = 'ダッシュボードフィルタ';
$string['filter1'] = '削除されたユーザー';
$string['filter2'] = '中断されたユーザー';
$string['filter3'] = 'ゲストユーザ';
$string['filter4'] = 'コースフィルタ';
$string['filter5'] = '登録メソッドフィルタ';
$string['filter6'] = 'ユーザ登録フィルタ';
$string['filter7'] = '活動/リソースフィルタ';
$string['filter8'] = '登録ユーザフィルタ';
$string['filter1_desc'] = '削除されたユーザーを表示する';
$string['filter2_desc'] = '中断したユーザを表示する';
$string['filter3_desc'] = '[ゲスト]ユーザーをレポートに表示する';
$string['filter4_desc'] = '非表示コースを表示する';
$string['filter5_desc'] = 'アクティブでない登録方法を表示してください';
$string['filter6_desc'] = '登録ステータスがアクティブでないユーザーを表示してください。';
$string['filter7_desc'] = '非表示活動/リソースを表示する';
$string['filter8_desc'] = '登録ユーザのみ表示する（推奨しません）';
$string['intelliboardaccess'] = 'このページを表示する権限がありません。管理者に連絡してください。';
$string[' tex1 '] =' インテリボード学習者ダッシュボードは有効になっていません。';
$string['account'] = '購読情報';
$string['te12'] = '名';
$string['te13'] = '姓';
$string['te1'] = 'メール';
$string['te1_desc'] = 'インテリボード.net購読で使用される電子メールを入力してください。アクティブなサブスクリプションがない場合は、<a target="_blank" href="https://intelliboard.net"> インテリボード.net </a>に登録してください。学習者とインストラクターのダッシュボードには、レベル4以上のサブスクリプションが用意されています。';
$string['n1'] = '概要[学習者の進捗状況]';
$string['n2'] = '概要[評定]';
$string['n3'] = '概要[活動の進捗状況]';
$string['n12'] = '概要[コース概要]';
$string['n4'] = '概要[合計]';
$string['n5'] = '現在の進捗状況';
$string['n13'] = '総学習者';
$string['n6'] = 'ウィジェット:相関';
$string['n14'] = 'ウィジェット:学習者の関与';
$string['n18'] = 'ウィジェット:学習者評定状況';
$string['n7'] = 'ウィジェット:イベント利用率';
$string['n15'] = 'ウィジェット:活動利用率';
$string['n16'] = 'ウィジェット:トピックの利用率';
$string['n8'] = 'コースページ';
$string['n9'] = 'レポートページ';
$string['n10'] = '評価者ダッシュボード';
$string['n101'] = '評価者ダッシュボードを有効にする';
$string['n11'] = 'ナビゲーションメニューの代替テキスト';
$string['ts1'] = '学習者ダッシュボード';
$string['ts2'] = '学習者ダッシュボードページ';
$string['ts3'] = '学習者ダッシュボードコース';
$string['ts4'] = '学習者のダッシュボード評定';
$string['ts5'] = '学習者ダッシュボードレポート';
$string['learner_tf_last_week'] = 'Time filter: Last Week';
$string['t01'] = '時間フィルタ:先月';
$string['t02'] = '時間フィルタ:最後の四半期';
$string['t03'] = '時間フィルタ:Last Semester';
$string['t04'] = '[見出し]を有効にしました。';
$string['t05'] = '[見出し]進行中のコースを有効にする';
$string['t06'] = '[見出し]コース平均を有効にします。評定';
$string['t07'] = '[見出し]メッセージを有効にします。';
$string['t08'] = '[見出し]コース合計を有効にします。評定';
$string['t09'] = '評価者は自分の学習者を見ることができます。';
$string['t1'] = '学習者ダッシュボードを有効にする';
$string['t2'] = 'ダッシュボードを有効にする';
$string['t3'] = 'コースを有効にする';
$string['t4'] = '評定を有効にする';
$string['t48'] = 'レポートを有効にする';
$string['t5'] = '[活動の進捗状況]グラフを有効にする';
$string['t6'] = '[コースの進捗状況]グラフを有効にする';
$string['t7'] = '[私のコース平均]を有効にする';
$string['t8'] = '[全コース平均]を有効にする';
$string['t9'] = '[課題]ウィジェットを有効にする';
$string['t10'] = '[小テスト]ウィジェットを有効にする';
$string['t11'] = '[コース進捗状況]ウィジェットを有効にする';
$string['t12'] = '[活動参加]ウィジェットを有効にする';
$string['t13'] = '[学習]ウィジェットを有効にする';
$string['t14'] = '[コースの完了]ウィジェットを有効にする';
$string['t15'] = '[相関]ウィジェットを有効にする';
$string['t16'] = 'コース教員を有効にする';
$string['t17'] = 'コースカテゴリを有効にする';
$string['t18'] = 'コースの完了を有効にする';
$string['t19'] = 'コースの成績を有効にする';
$string['t20'] = 'コースの平均を有効にする';
$string['t21'] = 'コース時間を有効にする';
$string['t22'] = 'コース開始日を有効にする';
$string['t23'] = '[コース開始日]列を有効にする';
$string['t24'] = '[登録された日付]列を有効にする';
$string['t25'] = '[進捗状況]列を有効にする';
$string['t26'] = '[レター]列を有効にする';
$string['t27'] = '[完了した活動]列を有効にする';
$string['t28'] = '[評定]列を有効にする';
$string['t29'] = '[受講完了ステータス]列を有効にする';
$string['t30'] = '[活動評定]列を有効にする';
$string['t31'] = '[課題] [評定]ウィジェット列を有効にする';
$string['t32'] = '[予定] [期日]ウィジェット列を有効にします';
$string['t33'] = '[小テスト] [評定]ウィジェット列を有効にする';
$string['t34'] = '[小テスト] [期日]ウィジェット列を有効にする';
$string['t35'] = '[コース進捗] [進度]ウィジェット列を有効にします。';
$string['t36'] = '[コース進捗状況] [グレード]ウィジェット列を有効にする';
$string['t37'] = '[コース進捗状況] [登録済み]ウィジェット列を有効にする';
$string['t38'] = 'コースの進捗状況を有効にする[完了]ウィジェット列';
$string['t39'] = '[進捗状況] [ゴール評定]オプションを有効にする';
$string['t40'] = '[進捗状況] [学習者平均]オプションを有効にする';
$string['t41'] = '[活動評定ヘッダー]を有効にします。';
$string['t42'] = '[活動評定ヘッダー]を有効にしてください。';
$string['t43'] = '[活動評定]を有効にしてください';
$string['t44'] = '[活動評定] 評定列を有効にします。';
$string['t45'] = '[活動評定] 評定列を有効にします。';
$string['t46'] = '[活動評定]を有効にしました';
$string['t47'] = 'コース[グリッド]背景色';
$string['t49'] = 'レポートフィルタ列';
$string['t50'] = '教員の役割';
$string['t51'] = '学習者の役割';
$string['current_grade'] = '現在の成績';
$string['average_grade'] = '平均成績';
$string['type_here'] = 'ここに入力してください...';
$string['enrolled_date'] = '登録日時';
$string['teacher'] = '教員';
$string['category'] = 'カテゴリ';
$string['current_grade'] = '現在の成績';
$string['completion'] = '完了';
$string['class_average'] = '学習者平均';
$string['time_spent'] = '時間の消費';
$string['completed_on'] = '{$a}で完了しました';
$string['passed_on'] = '{$a}で完了（パス）';
$string['failed_on'] = '{$a}で完了（失敗）';
$string['last_access_on_course'] = 'コースへの最後のアクセス:{$a}';
$string['you_have_certificates'] = 'あなたは {$a} 修了証を持っています。';
$string['close'] = '閉じる';
$string['view_course_details'] = 'コースの詳細を表示する';
$string['incomplete'] = '不完全です';
$string['return_to_grades'] = '成績に戻る';
$string['grade'] = '評定';
$string['last_week'] = '先週';
$string['last_month'] = '先月';
$string['last_quarter'] = '前四半期';
$string['last_semester'] = '前学期';
$string['activity_progress'] = '活動の進捗状況';
$string['course_progress'] = 'コースの進捗状況';
$string['my_course_average_all'] = '私のコース平均（全コース）';
$string['overall_course_average'] = '全コース平均（すべての学習者;すべてのコース）';
$string['assignments'] = '課題';
$string['quizzes'] = '小テスト';
$string['assignment_name'] = '課題名';
$string['due_date'] = '期日';
$string['no_data'] = 'データなし';
$string['quiz_name'] = '小テスト名';
$string['all_courses'] = 'すべてのコース';
$string['time_period_due'] = '期間（期日）';
$string['all_data'] = 'すべてのデータ';
$string['progress'] = '進捗状況';
$string['enrolled'] = '登録済み';
$string['completed'] = '完了';
$string['activity_participation'] = '活動参加';
$string['learning'] = '学習';
$string['course_success'] = 'コースの成果';
$string['correlations'] = '相関';
$string['course_start_date'] = 'コース開始日';
$string['letter'] = 'レター';
$string['completed_activities'] = '完了した活動';
$string['score'] = '評定';
$string['course_completion_status'] = 'コース修了ステータス';
$string['activity_grades'] = '活動成績';
$string['completion_is_not_enabled'] = 'このコースの修了は有効ではありません。';
$string['activities'] = '活動';
$string['activity_name'] = '活動名';
$string['type'] = 'タイプ';
$string['graded'] = '評定';
$string['passed'] = '合格';
$string['failed'] = '失敗しました';
$string['completed_courses'] = '完了したコース';
$string['courses_in_progress'] = 'コースは進行中です';
$string['courses_avg_grade'] = 'コース平均評定';
$string['courses_sum_grade'] = 'コース合計評定';
$string['grades'] = '評定';
$string['messages'] = 'メッセージ';
$string['x_completions'] = ' {$a} 完了';
$string['completion_status'] = '完了ステータス';
$string['users_activity'] = 'ユーザーの活動';
$string['daily'] = '日別';
$string['weekly'] = '週別';
$string['monthly'] = '月別';
$string['number_of_sessions'] = 'セッション数';
$string['number_today'] = ' {$a} 今日';
$string['number_this_week'] = ' {$a} 今週';
$string['course_completions'] = 'コースの完了';
$string['user_enrolments'] = 'ユーザー登録';
$string['users'] = 'ユーザー';
$string['modules'] = 'モジュール';
$string['categories'] = 'カテゴリ';
$string['total'] = '合計';
$string['users_overview'] = 'ユーザー概要';
$string['enable_time_and_visits_users_overview'] = 'ユーザー概要で訪問時間と訪問回数を有効にする';
$string['disable_time_and_visits_users_overview'] = 'ユーザー概要での滞在時間と訪問回数を無効にする';
$string['loading'] = '読み込み中...';
$string['loading2'] = 'しばらくお待ちください...';
$string['enrollments'] = '登録';
$string['registrations'] = '登録';
$string['participation'] = '参加';
$string['time'] = '時刻';
$string['enrolment_method'] = '登録方法';
$string['intelliBoard_migration_tool'] = 'インテリボード移行ツール';
$string['importing_totals'] = '合計のインポート';
$string['total_numbers'] = '日: {$a->timepoint}, セッション: {$a->sessions}, 訪問数: {$a->visits},  利用時間: {$a->timespend}';
$string['total_numbers2'] = 'ユーザ: {$a->userid}, ページ: {$a->page}, Param:{$a->param}, 訪問数: {$a->visits},  利用時間: {$a->timespend}';
$string['total_numbers3'] = '----日: {$a->timecreated}, トラックID: {$a->trackid}, 訪問数: {$a->visits},  利用時間: {$a->timespend}';
$string['logs_to_process'] = '処理するログ{$a}';
$string['please_wait_or_cancel'] = '続行するか、<a href="{$a}">キャンセル</a>してください。';
$string['done'] = '完了！';
$string['return_to_home'] = 'HOMEに帰る';
$string['importing_logs'] = 'ログをインポートしています';
$string['intelliBoard_migration_tool_info'] = 'インテリボード移行ツールは履歴データをMoodleログテーブルから新しいフォーマットに移行するために使用されます。 Moodleのログ保存手順は変更されませんのでご注意ください。履歴データを新しい形式に移行すると、利用時間や訪問数などの履歴値がインテリボード.netでプレビューできます。 ';
$string['moodle_logs'] = 'Moodleログ';
$string['intelliboard_tracking'] = 'インテリボードのトラッキング';
$string['intelliboard_logs'] = 'インテリボードのログ';
$string['intelliboard_totals'] = 'インテリボード合計';
$string['intelliboard_start_tracking'] = 'インテリボードのスタートトラッキング';
$string['total_values_include'] = '合計値にはユニークセッション、コース、訪問、時間が含まれます。';
$string['items_per_query'] = 'クエリごとのアイテム';
$string['import'] = 'インポート';
$string['log_values_include'] = 'ログ値には、各ユーザーの1日あたりのログが含まれます。';
$string['powered_by'] = 'Powered by <a href="https://intelliboard.net/"> インテリボード.net </a>';
$string['intelliboardnet'] = 'インテリボード.net';
$string['visits'] = '訪問数';
$string['registered'] = '登録済み';
$string['disabled'] = '無効';
$string['enrolled_completed'] = '登録: {$a->courses}, 完了: {$a->completed_courses}';
$string['enrolled_users_completed'] = '登録ユーザ: {$a->users}, 完了: {$a->completed}';
$string['user_grade_avg'] = '{$a->user} 評定: {$a->grade}, 評定平均: {$a->avg_grade_site})';
$string['user_visit_avg'] = '{$a->user} 訪問: {$a->visits}, 訪問数平均: {$a->avg_visits_site}';
$string['user_time_avg'] = '{$a->user} 利用時間: {$a->timespend}, 利用時間平均: {$a->avg_timespend_site}';
$string['more_users'] = '他のユーザー';
$string['more_courses'] = 'その他のコース';
$string['show_1_to_10'] = '1から10を表示しています';
$string['course_grade'] = 'コース評定';
$string['completed_activities_resourses'] = '完了した活動/リソース';
$string['save'] = '保存';
$string['help'] = 'ヘルプが必要ですか？';
$string['in1'] = '概要';
$string['in2'] = '現在の進捗状況';
$string['in3'] = 'トータルコース';
$string['in4'] = '総学習者';
$string['in5'] = '合計コースの成績';
$string['in6'] = '学習者は完了しました';
$string['in7'] = '学習者が未了です';
$string['in8'] = '学習者の平均評定';
$string['in9'] = '相関';
$string['in10'] = 'イベント利用率';
$string['in11'] = '学習者の進捗状況';
$string['in12'] = '評定進度';
$string['in13'] = '時間の消費（％）';
$string['in14'] = '％進捗状況';
$string['in15'] = '学習者の完了';
$string['in16'] = '最後のアクセス';
$string['in17'] = '合計所要時間';
$string['in18'] = '総訪問数';
$string['in19'] = '平均。グレード';
$string['in20'] = '学習者に戻る';
$string['in201'] = '活動に戻る';
$string['in21'] = 'コース平均評定';
$string['in22'] = '有効';
$string['in23'] = '表示する学習者がいません。';
$string['in24'] = 'モジュール';
$string['in25'] = '合格評定';
$string['in26'] = '学習者の関与';
$string['in34'] = '学生評定進度';
$string['in27'] = '総学習者';
$string['in28'] = '平均所要時間';
$string['in29'] = '有効な生徒';
$string['in30'] = 'アクティブでない学生';
$string['in31'] = 'アクティビティ利用率';
$string['in32'] = '選択した期間内の平均時間';
$string['in33'] = 'トピックの利用率';
$string['status'] = 'ステータス';
$string['course_category'] = 'コースカテゴリ';
$string['course_started'] = 'コースの開始';
$string['total_time_spent_enrolled_learners'] = '登録された学習者がコースに費やした合計時間';
$string['total_visits_enrolled_learners'] = '登録された学習者のコース訪問総数';
$string['learners_enrolled'] = '学習者の登録';
$string['learers_enrolled_period'] = '選択した期間内に登録した学習者';
$string['learning_progress'] = '学習の進捗状況';
$string['sections'] = 'セクション';
$string['section'] = 'セクション';
$string['total_activities_resources'] = '総活動/リソース';
$string['completions'] = '完了';
$string['return_to_courses'] = 'コースに戻る';
$string['click_link_below_support_pages'] = 'インテリボードのサポートページにアクセスするには、以下のリンクをクリックしてください:';
$string['support'] = 'サポート';
$string['course_name'] = 'コース名';
$string['enrolled_completed_learners'] = '登録された/完了した学習者';
$string['activities_resources'] = '活動/リソース';
$string['actions'] = 'アクション';
$string['learner_name'] = '学習者名';
$string['completed_activities_resources'] = '完了した活動/リソース';
$string['filter_dates'] = '日付のフィルタリング:';
$string['select_date'] = '日付の選択';
$string['select'] = '選択';
$string['selectall'] = 'すべて選択';
$string['ok'] = 'OK';
$string['moodle'] = 'Moodle';
$string['totara'] = 'Totara';
$string['monitors'] = 'モニター';
$string['cohorts'] = 'コーホート';
$string['course_overview'] = 'コース概要';


$string['topics'] = 'トピック';
$string['a31'] = 'フレームワーク';
$string['a32'] = '学習計画';
$string['a33'] = '評価済、熟達';
$string['a34'] = '評価済、熟達していない';
$string['a35'] = '未評価';
$string['a36'] = 'コンピテンシー概要';
$string['a37'] = 'コンピテンシーが作成されていません。システム管理者に連絡してください。 ';
$string['a38'] = 'コンピテンシーにリンクされたコース';
$string['a39'] = 'コンピテンシーの合計';
$string['a40'] = 'リンクされたコース';
$string['no_competency'] = 'Moodleサイトでコンピテンシーを有効にしていないようです。';

$string['scalesettings'] = 'スケール設定';
$string['scales'] = 'カスタム尺度を有効にする';
$string['scale_raw'] = '尺度を無効にする';
$string['scale_real'] = '代わりに真の評定を表示する';
$string['scale_total'] = '合計評定';
$string['scale_value'] = '値';
$string['scale_percentage'] = 'パーセンテージ';

$string['a0'] = 'コンピテンシーダッシュボード';
$string['a1'] = 'コンピテンシー';
$string['a2'] = '熟達';
$string['a3'] = '割り当てられた活動';
$string['a4'] = '熟達度';
$string['a5'] = '評価されたコンピテンシー';
$string['a6'] = '# エビデンス';
$string['a7'] = '評価された学習者';
$string['a8'] = '進捗状況';
$string['a9'] = '熟達した学習者';
$string['a10'] = '登録された学習者';
$string['a11'] = 'コースに割り当てられたコンピテンシーのリスト';
$string['a12'] = '学習者のステータス';
$string['a13'] = 'コンピテンシー名';
$string['a14'] = '作成済み';
$string['a15'] = '割り当て済み';
$string['a16'] = '指示された熟達';
$string['a17'] = '評価';
$string['a18'] = 'コンピテンシー能力';
$string['a19'] = 'コンピテンシー評価日付';
$string['a20'] = 'コンピテンシー・レター';
$string['a21'] = '活動が割り当てられました';
$string['a22'] = '熟達：達成済み';
$string['a23'] = '能力：評価済み';
$string['a24'] = '＃証拠';
$string['a25'] = '完了した学習者';
$string['a27'] = '不足';
$string['a28'] = '詳細';
$string['a29'] = 'コンピテンシーダッシュボードを有効にする';
$string['a30'] = 'コンピテンシーレポートを有効にする';
$string['a26'] = 'この表には、コースに割り当てられたコンピテンシーの数、評価された（熟練しているかどうかにかかわらず）学習者、およびコンピテンシーに熟達した学習者が表示されます。';
$string['s25'] = '活動に費やされた時間';
$string['s45'] = '活動';
$string['s46'] = '試行中学習者の割合';
$string['s47'] = 'トピック';
$string['s48'] = 'トピックに費やした時間';

$string['completions'] = '活動完了ステータス';
$string['completions_completed'] = '完了ステータス（完了）';
$string['completions_pass'] = '完了ステータス（合格）';
$string['completions_fail'] = '完了ステータス（不合格）';
$string['completions_desc'] = '1）ユーザはこの活動を完了しました。学習者が合格したか不合格かは特定されていません。<br>2）ユーザーは、合格点を超える評定でこの活動を完了しました。<br>3）ユーザーはこの活動を完了しましたが、評定は合格点よりも低いです。 ';
$string['widget_name27'] = '累積登録';
$string['widget_name28'] = 'エンゲージメント';
$string['widget_name29'] = 'ユニークログイン';
$string['widget_name30'] = 'コース別登録者';
$string['widget_name31'] = '登録者と管理者が取得します';
$string['role1'] = '最初の役割';
$string['role2'] = '第2の役割';

$string['select_course'] = 'コースを選択';
$string['select_quiz'] = '小テストを選択';
$string['not_quiz'] = '選択したコースに作成された小テストはありません。';
$string['enter_course_and_quiz'] = 'コースと小テストを選択してください。';
$string['enter_quiz'] = '小テストを選択してください。';
$string['analityc_3_name'] = '小テストの概要と質問の詳細';
$string['course_name_a'] = 'コース: {$a} ';
$string['quiz_name_a'] = '小テスト: {$a} ';
$string['cor_incor_answers'] = '正しい/間違った回答';
$string['quiz_finished'] = '小テストが終了しました';
$string['quiz_grades'] = '小テスト評定';
$string['correct_number'] = '修正する {$a} ';
$string['wrong_number'] = '不正な {$a} ';
$string['correct'] = '修正する';
$string['incorrect'] = '間違っています';
$string['weekday_0'] = '月曜';
$string['weekday_1'] = '火曜';
$string['weekday_2'] = '水曜';
$string['weekday_3'] = '木曜';
$string['weekday_4'] = '金曜';
$string['weekday_5'] = '土曜';
$string['weekday_6'] = '日曜';
$string['time_1'] = '午前';
$string['time_2'] = '午後';
$string['time_3'] = '夕方';
$string['time_4'] = '時間外';
$string['passing_score_for'] = '{$a}の合格点';
$string['name'] = '名前';
$string['answers'] = '回答';
$string['ques_breakdown'] = '質問の内訳';
$string['n17'] = '分析ページ';
$string['analytics'] = '分析';
$string['pdf'] = 'PDF';
$string['csv'] = 'CSV';
$string['excel'] = 'Excel';

$string['grades_alt_text'] = 'ナビゲーションメニューの代替テキスト';
$string['course_chart'] = 'コースチャートを有効にする';
$string['course_activities'] = 'コース活動を有効にする';
$string['filter_this_year'] = '時間フィルタ:今年';
$string['filter_last_year'] = '時間フィルター:昨年';
$string['this_year'] = '今年';
$string['last_year'] = '去年';

$string['reportselect'] = 'App.IntelliBoard.netから少なくとも1つのレポートを選択してください。レポートをクリックしてから、レポート設定をクリックし、「Moodleで表示」で選択してください。';
$string['monitorselect'] = 'App.IntelliBoard.netから少なくとも1台のモニタを選択してください。 Monitorsをクリックし、次にモニタ設定をクリックし、 「Moodleで表示」で選択してください。 ';
$string['select_user'] = 'ユーザーを選択';
$string['course_max_grade'] = 'コースの最大評定';

$string['no_data_notification'] = '[日付]の新しいデータはありません。';
$string['last_hour'] = '時間';
$string['last_day'] = '日';


$string['privacy:metadata:local_intelliboard_assign:rel'] = 'Relのレコードタイプ';
$string['privacy:metadata:local_intelliboard_assign:type'] = 'Moodleインスタンスのタイプ';
$string['privacy:metadata:local_intelliboard_assign:instance'] = '接続されたMoodleインスタンスID';
$string['privacy:metadata:local_intelliboard_assign:timecreated'] = 'レコードのタイムスタンプ';

$string['privacy:metadata:local_intelliboard_details:logid'] = 'テーブルID [local_intelliboard_logs]';
$string['privacy:metadata:local_intelliboard_details:visits'] = '1日あたりの回数：訪問回数、マウスクリック';
$string['privacy:metadata:local_intelliboard_details:timespend'] = '1時間あたりに費やされた時間。';
$string['privacy:metadata:local_intelliboard_details:timepoint'] = '時間';

$string['privacy:metadata:local_intelliboard_logs:trackid'] = 'テーブルのID [local_intelliboard_logs]';
$string['privacy:metadata:local_intelliboard_logs:visits'] = '1日あたりの回数：訪問回数、マウスクリック';
$string['privacy:metadata:local_intelliboard_logs:timespend'] = '1日あたり費やされた時間';
$string['privacy:metadata:local_intelliboard_logs:timepoint'] = '特定のタイムスタンプ';

$string['privacy:metadata:local_intelliboard_totals:sessions'] = 'Moodleのユーザセッションの総数';
$string['privacy:metadata:local_intelliboard_totals:courses'] = 'Moodleのトータルコース';
$string['privacy:metadata:local_intelliboard_totals:visits'] = 'Moodle全訪問者の総訪問数';
$string['privacy:metadata:local_intelliboard_totals:timespend'] = 'Moodleの全ユーザが費やした総時間';
$string['privacy:metadata:local_intelliboard_totals:timepoint'] = '特定のタイムスタンプ';

$string['privacy:metadata:local_intelliboard_tracking:userid'] = 'MoodleページにアクセスしたユーザーID';
$string['privacy:metadata:local_intelliboard_tracking:courseid'] = 'ユーザーが訪れたコースID';
$string['privacy:metadata:local_intelliboard_tracking:page'] = 'ページタイプ[コース、モジュール、プロフィール、サイト]';
$string['privacy:metadata:local_intelliboard_tracking:param'] = 'ページIDのタイプ';
$string['privacy:metadata:local_intelliboard_tracking:visits'] = 'ユーザーがページにアクセスしました';
$string['privacy:metadata:local_intelliboard_tracking:timespend'] = 'ユーザーがページに表示するタイムペイン';
$string['privacy:metadata:local_intelliboard_tracking:firstaccess'] = 'ユーザーの最初のアクセス';
$string['privacy:metadata:local_intelliboard_tracking:lastaccess'] = 'ユーザーの最終アクセス';
$string['privacy:metadata:local_intelliboard_tracking:useragent'] = 'ユーザーのブラウザタイプ';
$string['privacy:metadata:local_intelliboard_tracking:useros'] = 'ユーザーオペレーティングシステム';
$string['privacy:metadata:local_intelliboard_tracking:userlang'] = 'ユーザーブラウザ言語';
$string['privacy:metadata:local_intelliboard_tracking:userip'] = 'ユーザーの最後のIPアドレス';

$string['privacy:metadata:local_intelliboard_ntf:id'] = '通知ID';
$string['privacy:metadata:local_intelliboard_ntf:type'] = '通知タイプ';
$string['privacy:metadata:local_intelliboard_ntf:externalid'] = '通知外部ID';
$string['privacy:metadata:local_intelliboard_ntf:userid'] = '通知外部アプリケーションID';
$string['privacy:metadata:local_intelliboard_ntf:email'] = '通知メール';
$string['privacy:metadata:local_intelliboard_ntf:cc'] = '通知メール';
$string['privacy:metadata:local_intelliboard_ntf:subject'] = '通知対象';
$string['privacy:metadata:local_intelliboard_ntf:message'] = '通知メッセージ';
$string['privacy:metadata:local_intelliboard_ntf:state'] = '通知ステータス';
$string['privacy:metadata:local_intelliboard_ntf:attachment'] = '通知添付ファイル';
$string['privacy:metadata:local_intelliboard_ntf:tags'] = '通知タグ';

$string['privacy:metadata:local_intelliboard_ntf_hst:id'] = '通知履歴ID';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationid'] = '通知ID';
$string['privacy:metadata:local_intelliboard_ntf_hst:userid'] = '通知外部アプリケーションID';
$string['privacy:metadata:local_intelliboard_ntf_hst:通知名'] = '通知名';
$string['privacy:metadata:local_intelliboard_ntf_hst:email'] = '通知履歴メール';
$string['privacy:metadata:local_intelliboard_ntf_hst:timesent'] = '通知履歴のタイムスタンプ';

$string['select_manager_role'] = 'マネージャーの役割を選択してください';
$string['group_aggregation'] = 'グループ集約';
$string['ssodomain'] = 'サブドメインSSO';
$string['ssodomain_desc'] = '分離されたサーバー/アカウントを持つシングルサインオン';
$string['instructor_redirect'] = 'インストラクターのリダイレクト';



$string['student_redirect'] = '学生のリダイレクト';
$string['sqlreport'] = 'SQLレポート';
$string['sqlreportcreate'] = 'レポートを作成する';
$string['sqlreports'] = 'SQLレポート';
$string['sqlreportname'] = 'レポート名';
$string['sqlreportcode'] = 'SQL';
$string['sqlreportdate'] = '作成日時';
$string['sqlreportactive'] = '有効化';
$string['sqlreportinactive'] = '非アクティブ化';

$string['remove_message'] = 'SQLレポートは削除されました';
$string['delete_message'] = 'SQLレポートを削除しますか？';
$string['success_message'] = 'SQLレポートが保存されました';



$string['tex1'] = 'IntelliBoard Learner Dashboard is not enabled.';
$string['t52'] = 'Enable [Course Progress][Category] widget rows';
$string['showing_1_to_10'] = 'Showing 1 to 10';
$string['learners_enrolled_period'] = 'Learners enrolled within selected period';
$string['incorrect_number'] = 'Incorrect {$a}';
$string['privacy:metadata:local_intelliboard_assign'] = 'Intelliboard assigns-subaccounts table';
$string['privacy:metadata:local_intelliboard_details'] = 'Intelliboard alt/logs/by-hour table';
$string['privacy:metadata:local_intelliboard_logs'] = 'Intelliboard alt/logs/by-day table';
$string['privacy:metadata:local_intelliboard_totals'] = 'Intelliboard alt/logs/total table';
$string['privacy:metadata:local_intelliboard_tracking'] = 'Intelliboard alt/logs/all-time table';
$string['privacy:metadata:local_intelliboard_reports'] = 'Intelliboard custom sql reports table';
$string['privacy:metadata:local_intelliboard_ntf'] = 'Intelliboard notifications main table';
$string['privacy:metadata:local_intelliboard_ntf_hst'] = 'Intelliboard notifications history table';
$string['privacy:metadata:local_intelliboard_ntf_pms'] = 'Intelliboard notifications dynamic params table';
$string['privacy:metadata:local_intelliboard_assign:userid'] = 'USER ID of record';
$string['privacy:metadata:local_intelliboard_reports:status'] = 'Status of report - activated/not activated';
$string['privacy:metadata:local_intelliboard_reports:name'] = 'Name of custom report';
$string['privacy:metadata:local_intelliboard_reports:sqlcode'] = 'BASE64 encoded SQL code';
$string['privacy:metadata:local_intelliboard_reports:timecreated'] = 'Creation time';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationname'] = 'Notification name';
$string['scale_percentage_round'] = 'Percentage round';
$string['bbbapiendpoint'] = 'BBB API endpoint';
$string['bbbserversecret'] = 'BBB server secret';
$string['check_active_meetings'] = 'Check active meetings';
$string['bbbmeetings'] = 'BigBlueButton meetings';
$string['enablebbbmeetings'] = 'Enable monitoring of BigBlueButton meetings';
$string['enablebbbdebug'] = 'BigBlueButton debug mode';
$string['privacy:metadata:local_intelliboard_bbb_meet'] = 'Log about BigBlueButton meetings';
$string['privacy:metadata:local_intelliboard_bbb_meet:id'] = 'ID of meeting log';
$string['privacy:metadata:local_intelliboard_bbb_meet:meetingname'] = 'Meeting name';
$string['privacy:metadata:local_intelliboard_bbb_meet:meetingid'] = 'Meeting ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:internalmeetingid'] = 'Internal (in BBB server) Meeting ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:createtime'] = 'Create time (timestamp)';
$string['privacy:metadata:local_intelliboard_bbb_meet:createdate'] = 'Create date (string)';
$string['privacy:metadata:local_intelliboard_bbb_meet:voicebridge'] = 'The extension number for the voice bridge (use if connected to phone system)';
$string['privacy:metadata:local_intelliboard_bbb_meet:dialnumber'] = 'The dial access number that participants can call in using regular phone.';
$string['privacy:metadata:local_intelliboard_bbb_meet:attendeepw'] = 'The password that will be required for attendees to join the meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:moderatorpw'] = 'The password that will be required for moderators to join the meeting or for certain administrative actions';
$string['privacy:metadata:local_intelliboard_bbb_meet:running'] = 'Status of meeting (active|stopped)';
$string['privacy:metadata:local_intelliboard_bbb_meet:duration'] = 'Meeting duration';
$string['privacy:metadata:local_intelliboard_bbb_meet:hasuserjoined'] = 'Flag. Users joined to meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:recording'] = 'Flag. Meeting will be recorded';
$string['privacy:metadata:local_intelliboard_bbb_meet:hasbeenforciblyended'] = 'Flag. Meeting has been forcibly ended';
$string['privacy:metadata:local_intelliboard_bbb_meet:starttime'] = 'Start time of meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:endtime'] = 'End time of meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:participantcount'] = 'Number of attendees';
$string['privacy:metadata:local_intelliboard_bbb_meet:listenercount'] = 'Number of listeners';
$string['privacy:metadata:local_intelliboard_bbb_meet:voiceparticipantcount'] = 'Number of participants with connected microphone';
$string['privacy:metadata:local_intelliboard_bbb_meet:videocount'] = 'Number of participants with connected video camera';
$string['privacy:metadata:local_intelliboard_bbb_meet:maxusers'] = 'Max number of participants';
$string['privacy:metadata:local_intelliboard_bbb_meet:moderatorcount'] = 'Number of moderators';
$string['privacy:metadata:local_intelliboard_bbb_meet:courseid'] = 'Course ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:cmid'] = 'Course module ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:bigbluebuttonbnid'] = 'Row ID in table bigbluebuttonbn';
$string['privacy:metadata:local_intelliboard_bbb_meet:ownerid'] = 'Owner ID (user which created the meeting)';
$string['privacy:metadata:local_intelliboard_bbb_atten'] = 'Log about attendees of BigBlueButton meetings';
$string['privacy:metadata:local_intelliboard_bbb_atten:id'] = 'Attendee ID';
$string['privacy:metadata:local_intelliboard_bbb_atten:userid'] = 'User ID (row in table "user")';
$string['privacy:metadata:local_intelliboard_bbb_atten:fullname'] = 'Full name of meeting attendee';
$string['privacy:metadata:local_intelliboard_bbb_atten:role'] = 'Role of meeting attendee';
$string['privacy:metadata:local_intelliboard_bbb_atten:ispresenter'] = 'Flag. Attendee is presenter';
$string['privacy:metadata:local_intelliboard_bbb_atten:islisteningonly'] = 'Flag. Attendee has no connected microphone or webcam';
$string['privacy:metadata:local_intelliboard_bbb_atten:hasjoinedvoice'] = 'Flag. Attendee has connected microphone';
$string['privacy:metadata:local_intelliboard_bbb_atten:hasvideo'] = 'Flag. Attendee has connected webcam';
$string['privacy:metadata:local_intelliboard_bbb_atten:meetingid'] = 'Meeting ID (ID in BigBlueButton server)';
$string['privacy:metadata:local_intelliboard_bbb_atten:localmeetingid'] = 'Meeting ID (ID in table local_intelliboard_bbb_meet)';
$string['privacy:metadata:local_intelliboard_bbb_atten:arrivaltime'] = 'Time when user connected to meeting';
$string['privacy:metadata:local_intelliboard_bbb_atten:departuretime'] = 'Time when user disconnected from meeting';

$string['privacy:metadata:local_intelliboard_bb_partic'] = 'List of participants of collaborate session';
$string['privacy:metadata:local_intelliboard_bb_partic:id'] = 'ID of session participation';
$string['privacy:metadata:local_intelliboard_bb_partic:sessionuid'] = 'Session UUID';
$string['privacy:metadata:local_intelliboard_bb_partic:useruid'] = 'User UUID (BlackBoard Collaborate service)';
$string['privacy:metadata:local_intelliboard_bb_partic:external_user_id'] = 'User ID (Moodle)';
$string['privacy:metadata:local_intelliboard_bb_partic:role'] = 'Session role';
$string['privacy:metadata:local_intelliboard_bb_partic:display_name'] = 'User name';
$string['privacy:metadata:local_intelliboard_bb_partic:first_join_time'] = 'First join to session';
$string['privacy:metadata:local_intelliboard_bb_partic:last_left_time'] = 'Last leave from session';
$string['privacy:metadata:local_intelliboard_bb_partic:duration'] = 'Spent time on session';
$string['privacy:metadata:local_intelliboard_bb_partic:rejoins'] = 'Number of rejoins to session';

$string['privacy:metadata:local_intelliboard_bb_rec'] = 'List of bb collaborate sessions records';
$string['privacy:metadata:local_intelliboard_bb_rec:id'] = 'Record ID';
$string['privacy:metadata:local_intelliboard_bb_rec:sessionuid'] = 'Session UUID';
$string['privacy:metadata:local_intelliboard_bb_rec:record_name'] = 'Record name';
$string['privacy:metadata:local_intelliboard_bb_rec:record_url'] = 'Record URL';

$string['privacy:metadata:local_intelliboard_bb_trck_m'] = 'List of tracked sessions';
$string['privacy:metadata:local_intelliboard_bb_trck_m:id'] = 'ID of track log';
$string['privacy:metadata:local_intelliboard_bb_trck_m:sessionuid'] = 'Session UUID';
$string['privacy:metadata:local_intelliboard_bb_trck_m:track_time'] = 'Track time';

$string['privacy:metadata:local_intelliboard_att_sync'] = 'List of synchronized sessions';
$string['privacy:metadata:local_intelliboard_att_sync:id'] = 'ID of sync log';
$string['privacy:metadata:local_intelliboard_att_sync:type'] = 'Session type';
$string['privacy:metadata:local_intelliboard_att_sync:instance'] = 'Moodle session ID';
$string['privacy:metadata:local_intelliboard_att_sync:data'] = 'Additional sync data';

$string['myorders'] = 'Orders';
$string['myseats'] = 'Seats';
$string['mywaitlist'] = 'Waitlist';
$string['mysubscriptions'] = 'Subscriptions';
$string['seatscode'] = 'Seats code';
$string['numberofseats'] = 'Number of seats';
$string['downloadinvoice'] = 'Download Invoice';
$string['product'] = 'Product';
$string['key'] = 'Key';
$string['created'] = 'Created';
$string['seatnumber'] = 'Seats Number';
$string['seatsused'] = 'Seat Used';
$string['details'] = 'Details';
$string['username'] = 'User Name';
$string['used'] = 'Used';
$string['subscriptiondate'] = 'Subscription date';
$string['price'] = 'Price';
$string['recurringperiod'] = 'Recurring period';
$string['billingcycles'] = 'Billing cycles';
$string['active'] = 'Active';
$string['suspended'] = 'Suspended';
$string['canceled'] = 'Canceled';
$string['expired'] = 'Expired';
$string['process'] = 'Process';
$string['cancel_subscription'] = 'Cancel subscription';
$string['messageprovider:intelliboard_notification'] = "Intelliboard notification";

$string['verifypeer'] = "CURLOPT SSL VERIFYPEER";
$string['verifypeer_desc'] = "This option determines whether curl verifies the authenticity of the peer's certificate.";
$string['verifyhost'] = "CURLOPT SSL VERIFYHOST";
$string['verifyhost_desc'] = "This option determines whether libcurl verifies that the server cert is for the server it is known as.";
$string['cipherlist'] = "CURLOPT SSL CIPHER LIST";
$string['cipherlist_desc'] = "Specify ciphers to use for TLS";
$string['sslversion'] = "CURLOPT SSLVERSION";
$string['sslversion_desc'] = "Pass a long as parameter to control which version range of SSL/TLS versions to use";

$string['debug'] = "Debug CURL requests";
$string['debug_desc'] = "";

/* IntelliCart */
$string['intellicart'] = "IntelliCart integration";
$string['intellicart_desc'] = "Allow students to see IntelliCart reports.";
$string['coursessessionspage'] = "Courses Sessions Page";
$string['coursessessions'] = "Courses Sessions";
$string['session_name'] = "Session Name";
$string['session_time'] = "Session Time";
$string['return_to_sessions'] = "Return to Sessions";
/* IntelliCart END*/

$string['allmod'] = "All activities";
$string['customod'] = "Custom activities";

$string['timespent'] = "------ Time Spent ----";
$string['inprogress'] = "In progress";
$string['notstarted'] = "Not started";
$string['modulename'] = "Module name";
$string['viewed'] = "Viewed";
$string['course'] = "Course";
$string['courseaverage'] = "Course Average";
$string['mygrade'] = "My Grade";
$string['myprogress'] = "My grade progress";
$string['instructor_course_shortname'] = "Show course short name instead course full name";


$string['trackmedia'] = "Track HTML5 media";
$string['trackmedia_desc'] = "Track HTML5 video and audio";
$string['t53'] = 'Enable on [Activity progress] chart average line';
$string['ianalytics'] = 'IntelliBoard Analytics';

$string['instructor_course_visibility'] = 'Show hidden/suspended courses for [instructor]';
$string['instructor_mode'] = 'Show all courses available for [instructor]';
$string['instructor_mode_access'] = 'Show all courses available for [instructor] with [update] permissions';
$string['student_course_visibility'] = 'Show hidden/suspended courses for [student]';



$string['support_text1'] = "All your Moodle data: easy, shareable, understandable, and attractive. IntelliBoard is a Moodle plugin that puts <strong>120+</strong> reports and monitors into your hands.";
$string['support_text2'] = "All your Moodle data: easy, shareable, understandable, and attractive. IntelliBoard is your Moodle reporting and analytics solution, giving you 120+ reports and analytics to help inform your educational business decisions.";
$string['support_info1'] = "You can join our <a target='_blank' href='https://intelliboard.net/events'>Webinars</a> as we take you on a tour through IntelliBoard 5.0 reporting and analytics!";
$string['support_info2'] = "Join our <a target='_blank' href='https://intelliboard.net/events'>Webinars</a>, or schedule a personal tour of your own data. With our world class support and service, you'll see your LMS in an entirely new light.";
$string['support_terms'] = "All rights reserved.";
$string['support_page'] = "Support Page";
$string['support_demo'] = "Schedule a Demo";
$string['support_trial'] = "Start Trial";
$string['support_close'] = "Close";

$string['instructor_custom_groups'] = "Instructor custom groups";


// settings of tables
$string['show_dashboard_tab'] = 'Show dashboard tab';
$string['table_set_icg'] = 'Instructor`s table "Course grades"';
$string['table_set_icg_c1'] = 'Course Name';
$string['table_set_icg_c2'] = 'Short Name';
$string['table_set_icg_c3'] = 'Category';
$string['table_set_icg_c4'] = 'Enrolled/Completed Learners';
$string['table_set_icg_c5'] = 'Course Avg. grade';
$string['table_set_icg_c6'] = 'Sections';
$string['table_set_icg_c7'] = 'Activities/Resources';
$string['table_set_icg_c8'] = 'Visits';
$string['table_set_icg_c9'] = 'Time Spent';
$string['table_set_icg_c11'] = 'Actions – Activities';
$string['table_set_icg_c12'] = 'Actions – Learners';
$string['percentage_completed_learners'] = 'Percentage of Completed Learners';
$string['avg_visits_per_stud'] = 'Average Visits Per Student';
$string['avg_time_spent_per_stud'] = 'Average Time Spent Per Student';

$string['table_set_ilg'] = 'Instructor`s table "Learners grades"';
$string['table_set_ilg_c1'] = 'Learner Name';
$string['table_set_ilg_c2'] = 'Email address';
$string['table_set_ilg_c3'] = 'Enrolled';
$string['table_set_ilg_c4'] = 'Last Access';
$string['table_set_ilg_c5'] = 'Status';
$string['table_set_ilg_c6'] = 'Grade';
$string['table_set_ilg_c7'] = 'Completed Activities/Resources';
$string['table_set_ilg_c8'] = 'Visits';
$string['table_set_ilg_c9'] = 'Time Spent';
$string['table_set_ilg_c10'] = 'Actions';

$string['table_set_ilg1'] = 'Instructor`s table "Learner grades"';
$string['table_set_ilg1_c1'] = 'Activity name';
$string['table_set_ilg1_c2'] = 'Type';
$string['table_set_ilg1_c3'] = 'Grade';
$string['table_set_ilg1_c4'] = 'Graded';
$string['table_set_ilg1_c5'] = 'Status';
$string['table_set_ilg1_c6'] = 'Visits';
$string['table_set_ilg1_c7'] = 'Time Spent';

$string['table_set_iag'] = 'Instructor`s table "Activities grades"';
$string['table_set_iag_c1'] = 'Activity name';
$string['table_set_iag_c2'] = 'Type';
$string['table_set_iag_c3'] = 'Learners Completed';
$string['table_set_iag_c4'] = 'Average grade';
$string['table_set_iag_c5'] = 'Visits';
$string['table_set_iag_c6'] = 'Time Spent';
$string['table_set_iag_c7'] = 'Actions';

$string['table_set_iag1'] = 'Instructor`s table "Activity grades"';
$string['table_set_iag1_c1'] = 'Learner Name';
$string['table_set_iag1_c2'] = 'Email address';
$string['table_set_iag1_c3'] = 'Status';
$string['table_set_iag1_c4'] = 'Grade';
$string['table_set_iag1_c5'] = 'Graded';
$string['table_set_iag1_c6'] = 'Visits';
$string['table_set_iag1_c7'] = 'Time Spent';
$string['grade_activities_overview'] = 'Graded Activities Overview';
$string['activity'] = 'Activity';
$string['date_format'] = 'Date format';
$string['user_enrollments_sessions_completion'] = 'User Enrollment, Session, Completion Activity Levels';
$string['user_site_summary_detail'] = 'User Site Summary Detail';
$string['course_enrollment_types'] = 'Course Enrollment Types';
$string['user_map'] = 'User Map';
$string['course_enrollments_with_completion_overview'] = 'Course Enrollments with Completion Overview';
$string['all_modules'] = 'All modules';

/* Attendance */
$string['attendance'] = 'Attendance';
$string['enableattendance'] = 'Enable attendance';
$string['attendancetoolurl'] = 'Tool URL';
$string['attendanceconsumerkey'] = 'Consumer key';
$string['attendancesharedsecret'] = 'Shared secret';
$string['sync_data_with_attendance'] = 'Sync data with attendance';
$string['attendanceapibase'] = 'Attendance API base path';
$string['attendanceapikey'] = 'Attendance API key';
$string['attendanceapisecret'] = 'Attendance API secret';
$string['enablesyncattendance'] = 'Enable BB Collaborate sessions synchronization with InAttendance';

/* BlackBoard Collaborate and InAttendance */
$string['bb_col_meetings'] = 'BlackBoard Collaborate meetings';
$string['enable_bb_col_debug'] = 'Enable BlackBoard Collaborate debug';
$string['bb_col_api_endpoint'] = 'BlackBoard Collaborate API endpoint';
$string['bb_col_consumer_key'] = 'BlackBoard Collaborate consumer key';
$string['bb_col_secret'] = 'BlackBoard Collaborate secret';
$string['enable_bb_col_meetings'] = 'Enable BlackBoard Collaborate meetings';

$string['intelliboard:attendanceadmin'] = 'Attendance Admin';
$string['student_grades'] = 'Student grades';
$string['grid_view'] = 'Grid view';
$string['list_view'] = 'List view';

/* Admin dashboard */
$string['admin_dashboard'] = 'Admin dashboard';
$string['adm_dshb_user_enr_sess_compl_act_lvls'] = 'User Enrollment, Session, Completion Activity Levels';
$string['adm_dshb_adm_dashb_totals'] = 'Totals';
$string['adm_dshb_user_site_summary_details'] = 'User Site Summary Detail';
$string['adm_dshb_course_enrollments_types'] = 'Course Enrollment Types';
$string['adm_dshb_user_map'] = 'User Map';
$string['adm_dshb_user_enrol_with_compl_overview'] = 'Course Enrollments with Completion Overview';

$string['instructor_hide_need_help'] = 'Hide "Need help" button';
$string['names_order'] = 'Names order';
$string['firstname_lastname'] = '{First Name} {Last Name}';
$string['lastname_firstname'] = '{Last Name} {First Name}';
$string['issuer'] = 'Issuer';
$string['criteria_method'] = 'Criteria method';
$string['criteria_all_courses'] = 'All of the following courses have to be completed';
$string['criteria_any_course'] = 'Any of the following courses have to be completed';
$string['dashboard_settings'] = 'Dashboard settings';

$string['tracklogs'] = 'Track Time by User - Daily';
$string['trackdetails'] = 'Track Time by User - Hourly';
$string['tracktotals'] = 'Track Time Aggregate - Daily';

$string['enable_badges_report'] = 'Enable "Badges" report';
$string['sizemode'] = 'Size Mode: Large ( > 5,000 Users)';
