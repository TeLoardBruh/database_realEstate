<?php
Route::view('/', 'welcome');
Route::view('/login_back_office', 'login_back_office');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/agent', 'Auth\LoginController@showAgentLoginForm')->name('login.agent');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
// Route::get('/admin/register_agent', 'Auth\RegisterController@AgentRegister');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/agent', 'Auth\LoginController@agentLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
// Route::post('/admin/register_agent', 'Auth\RegisterController@createAgent');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
// agent route 
Route::get('/admin/table_agent_list' ,'PageController@index');

//agent create in admin === === === === === === === === === === === === === === === ===
Route::get('/admin/register_agent' ,'PageController@createAgent_inter');
Route::post('/admin/register_agent' ,'PageController@createAgent');
//end agent create in admin === === === === === === === === === === === === === === === ===

// agent approve things from agent=== === === === === === === === === === === === === === === ===
Route::get('/admin/approve' ,'PageController@approve');

//end agent approve thing here === === === === === === === === === === === === === === === ===
// report route
Route::get('/admin/report/weekly' ,'PageController@weekly');
Route::get('/admin/report/monthly' ,'PageController@monthly');
Route::get('/admin/report/yearly' ,'PageController@yearly');

//  === === === === === === === === === === === === === === === ===
// interface routing 
Route::get('interface/about','PageController@aboutUs');
Route::get('interface/contactUs','PageController@contactUs');
Route::group(['middleware' => 'auth:agent'], function () {
    Route::view('/agent', 'agent');
});
