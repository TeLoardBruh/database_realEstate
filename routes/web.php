<?php
// route user interface
Route::view('/', 'welcome');

// route admin
Route::view('/login_office', 'login_back_office');
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


//
// Route::group(['middleware' => 'auth:agent'], function () {
    // Route::view('/agent', 'agent');

    Route::get('/agent/dashboard','AgentController@index')->name('agent.dashboard');
    Route::post('/agent/revenue','AgentController@revenue')->name('agent.revenue');

    Route::get('/agent/property/index','PropertyController@index')->name('property.index');
    Route::get('/agent/property/add','PropertyConroller@add')->name('property.add');
    Route::get('/agent/property/{pid}','PropertyConroller@detail')->name('property.detail');
    
    
    Route::get('/agent/property/{property_id}/buying-contract/add','BuyingContractController@add')->name('bcontract.add');
    Route::post('/agent/property/{property_id}/buying-contract/save','BuyingContractController@save')->name('bcontract.save');

    // Route::get('/agent/buying-contracts','BuyingContractController@index')->name('bcontract.index');
    // Route::post('/agent/buying-contrats/data','BuyingContractController@data')->name('bcontract.data');
    Route::get('/agent/buying-contract/{bcontract_id}','BuyingContractController@detail')->name('bcontract.detail');
    Route::get('/agent/buying-contract/{bcontract_id}/invoices','BuyingContractController@invoices')->name('bcontract.invoices');
    Route::get('/agent/buying-contract/{bcontract_id}/invoice/add','BuyingContractController@addInvoice')->name('bcontract.invoice.add');
    Route::post('/agent/buying-contract/{bcontract_id}/invoice/save','BuyingContractController@saveInvoice')->name('bcontract.invoice.save');

    Route::get('/agent/invoices','InvoiceController@invoices')->name('invoice.index');
    Route::post('/agent/invoices/data','InvoiceController@data')->name('invoice.data');
    Route::get('/agent/invoice/{invoice_id}','InvoiceController@detail')->name('invoice.detail');

    Route::get('/agent/property/{pid}/selling-contract/add','SellingContractController@add')->name('scontract.add');
    Route::post('/agent/property/{pid}/selling-contract/save','SellingContractController@save')->name('scontract.save');
// });
//  === === === === === === === === === === === === === === === ===
// interface routing 
Route::get('interface/about','PageController@aboutUs');
Route::get('interface/contactUs','PageController@contactUs');
Route::get('interface/list','PageController@listing');
Route::group(['middleware' => 'auth:agent'], function () {
    Route::view('/agent', 'agent');
});
