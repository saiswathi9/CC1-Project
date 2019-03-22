<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



// For Home
Route::get('/', 'System\HomeController@homePage')->name('system.home');


// About
Route::get('/system/about/participants', 'System\About\ParticipantsController@ParticipantsPage')->name('system.about.participants');
Route::get('/system/about/publications', 'System\About\PublicationsController@PublicationsPage')->name('system.about.publications');
Route::get('/system/about/courses', 'System\About\CoursesController@course_page')->name('system.about.courses');
Route::get('/system./about/courses/ECE_CS_8001', 'System\About\CoursesController@ECE_CS_8001')->name('system.about.courses.ece_cs_8001');
Route::get('/system/about/courses/ECE_CS_4001_7001', 'System\About\CoursesController@ECE_CS_4001_7001')->name('system.about.courses.ece_cs_4001_7001');


// Analytics
Route::get('/system/analytics/workflow_templates', 'System\Analytics\ProjectController@project_page')->name('system.analytics.workflow_templates');
Route::get('/system/analytics/workflow_page', 'System\Analytics\WorkflowController@workflow_page')->name('system.analytics.workflow_page');
Route::get('/system/analytics/neuron_nsg_workflow', 'System\Analytics\WorkflowController@neuron_nsg_workflow')->name('system.analytics.neuron_nsg_workflow');
//test
Route::get('/system/analytics/test', 'System\Analytics\WorkflowController@test')->name('system.analytics.test');
Route::get('/system/analytics/datasets', 'System\Analytics\DatasetsController@DatasetsPage')->name('system.analytics.datasets');
Route::get('/system/analytics/training_content', 'System\Analytics\TrainingContentController@TrainingContentPage')->name('system.analytics.training_content');

Route::get('/system/analytics/api_workflow_get_tools_list', 'System\Analytics\WorkflowController@api_workflow_get_tools_list')->name('system.analytics.api_workflow_get_tools_list');
Route::get('/system/analytics/api_workflow_run_workflow', 'System\Analytics\WorkflowController@api_workflow_run_workflow')->name('system.analytics.api_workflow_run_workflow');
Route::get('/system/analytics/api_workflow_get_job_status', 'System\Analytics\WorkflowController@api_workflow_get_job_status')->name('system.analytics.api_workflow_get_job_status');
Route::get('/system/analytics/api_workflow_get_job_result_list', 'System\Analytics\WorkflowController@api_workflow_get_job_result_list')->name('system.analytics.api_workflow_get_job_result_list');
Route::get('/system/analytics/api_workflow_get_backend_data_to_server', 'System\Analytics\WorkflowController@api_workflow_get_backend_data_to_server')->name('system.analytics.api_workflow_get_backend_data_to_server');
Route::get('/system/analytics/api_workflow_check_passphrase', 'System\Analytics\WorkflowController@api_workflow_check_passphrase')->name('system.analytics.api_workflow_check_passphrase');
Route::get('/system/analytics/api_workflow_get_nsg_jobs', 'System\Analytics\WorkflowController@api_workflow_get_nsg_jobs')->name('system.analytics.api_workflow_get_nsg_jobs');

// Event
Route::get('/system/event/mu_symposiums', 'System\Event\EventController@MUSymposiumsPage')->name('system.event.mu_symposiums');
Route::get('/system/event/second_bigdata_syposium_page', 'System\Event\EventController@SecondBigDataSymposiumPage')->name('system.event.second_bigdata_syposium_page');
Route::get('/system/event/bigdata_syposium_page', 'System\Event\EventController@BigDataSymposiumPage')->name('system.event.bigdata_syposium_page');
Route::get('/system/event/bigdata_syposium_register_submit', 'System\Event\EventController@BigDataSymposiumRegisterSubmit')->name('system.event.bigdata_syposium_register_submit');
Route::get('/system/event/workshops_page', 'System\Event\EventController@WorkshopsPage')->name('system.event.workshops_page');
Route::get('/system/event/workshops/Summer2018', 'System\Event\EventController@Workshop_2008_NeuroscienceResearchersPage')->name('system.event.workshops.Workshop_2008_NeuroscienceResearchersPage');

// Upload API
Route::post('/system/UploadAPI/uploadWorkflowInput', 'System\UploadAPI\UploadController@uploadWorkflowInput')->name('system.UploadAPI.uploadWorkflowInput');

Auth::routes();

//logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


// dummy route to check DB connection
Route::get('/system/analytics/database_insert_monitor', 'System\Analytics\DeleteController@database_insert_monitor')->name('system.analytics.database_insert_monitor');

Route::get('/system/chatbot/dialogflow_detect_intent', 'System\Chatbot\DialogflowController@detect_intent')->name('system.chatbot.dialogflow_detect_intent');

//test test inputs
Route::get('/system/analytics/store_params', 'System\Analytics\WorkflowController@store_params')->name('system.analytics.store_params');
Route::get('/system/analytics/api_workflow_job_submit', 'System\Analytics\WorkflowController@api_workflow_job_submit')->name('system.analytics.api_workflow_job_submit');
Route::get('/system/analytics/workflow_get_job_list', 'System\Analytics\WorkflowController@workflow_get_job_list')->name('system.analytics.workflow_get_job_list');

Route::get('/system/analytics/workflow_get_job_parameters', 'System\Analytics\WorkflowController@workflow_get_job_parameters')->name('system.analytics.workflow_get_job_parameters');

/*Route::get('/', function()
{
    return array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );
});