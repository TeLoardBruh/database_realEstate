<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/agent', 'Auth\LoginController@showAgentLoginForm')->name('login.agent');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/agent', 'Auth\RegisterController@showAgentRegisterForm')->name('register.agent');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/agent', 'Auth\LoginController@agentLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/agent', 'Auth\RegisterController@createAgent')->name('register.agent');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
// agent route 
Route::get('/admin/table_agent_list' ,'PageController@index');
Route::get('/admin/register' ,'PageController@createAgent');
Route::get('/admin/approve' ,'PageController@approve');
// report route
Route::get('/admin/report/weekly' ,'PageController@weekly');
Route::get('/admin/report/monthly' ,'PageController@monthly');
Route::get('/admin/report/yearly' ,'PageController@yearly');


Route::group(['middleware' => 'auth:agent'], function () {
    Route::view('/agent', 'agent');
});
