<?php

use Illuminate\Support\Facades\Route;

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

// Example Routes

/* Normal Root Route */
Route::get('/','AdminController@homeMgt')->name('/');

/************************************************ Super Admin Routes *******************************************/
/* Admin Login Route */
Route::get('/superadmin','AdminController@login')->name('/superadmin');
Route::post('/superadmin','AdminController@loginAdmin')->name('/superadmin');

/*
Route::get('/{slug}','ClientController@login')->name('/{slug}');
Route::post('/{slug}','ClientController@loginClient')->name('/{slug}');
*/
Route::get('/admin','ClientController@login')->name('/admin');
Route::post('/admin','ClientController@loginClient')->name('/admin');

Route::get('/manager','ManagerController@login');
Route::post('/manager','ManagerController@loginManager');
/* Logout Route */
Route::get('/admin-logout','AdminController@logout')->name('logout');

Route::get('/logout','ClientController@logout')->name('logout');

Route::get('/manager-logout','ManagerController@logout')->name('logout');

/* Home page Routes */
Route::get('/dashboard','AdminController@home')->name('dashboard');
Route::get('/dashboard/{slug}','AdminController@clientView')->name('/dashboard/{slug}');
Route::get('/dashboard/{slug}/edit','AdminController@clientEdit')->name('/dashboard/{slug}/edit');
Route::post('/dashboard/{slug}/edit','AdminController@clientEditing')->name('/dashboard/{slug}/edit');

/* Client Page Routes */
/* Add Route */
Route::get('/client-add','AdminController@clientAddGet')->name('/client-add');
Route::post('/client-add','AdminController@clientAddPost')->name('/client-add');

/* Details Route */
Route::get('/client-details','AdminController@clientDetails')->name('client-details');
Route::get('/client-details/{slug}','AdminController@clientView')->name('/client-details/{slug}');
Route::get('/client-details/{slug}/edit','AdminController@clientEdit')->name('/client-details/{slug}/edit');
Route::post('/client-details/{slug}/edit','AdminController@clientEditing')->name('/client-details/{slug}/edit');

/* Extent Validity Route */
Route::post('/extent-validity','AdminController@clientExtentValidity')->name('/extent-validity');

/* Log Route */
Route::get('/client-log','AdminController@clientLog')->name('/client-log');

/* Paymet Routes */
Route::get('/client-payment','AdminController@clientPayment')->name('/client-payment');
Route::post('/client-payment','AdminController@clientPaymenting')->name('/client-payment');

/* client Setting Routes */
Route::get('/client-setting','AdminController@clientSetting')->name('/client-setting');
Route::post('/client-setting','AdminController@clientSettinging')->name('/client-setting');

/* Support Page Routes */
Route::get('/support','AdminController@supportView')->name('/support');
Route::get('/support/{id}','AdminController@supportViewing')->name('/support/{id}');
Route::post('/support/reply','AdminController@supportReply')->name('/support/reply');

/* Setting Page Routes */
Route::get('/settings','AdminController@settings')->name('/settings');
Route::post('/settings','AdminController@settingsPost')->name('/settings');
Route::get('/settings/{id}','AdminController@settingEdit')->name('/settings');
Route::post('/settings/{id}','AdminController@settingEditing')->name('/settings');

/* Profile Page Routes */
Route::get('/profile','AdminController@profileView')->name('/profile');
Route::post('/profile','AdminController@profileChangePassword')->name('/settings');

/************************************************ Client Side Routes ************************************************/
/* Dashboard/ Home page Route */
Route::get('/{slug}/dashboard','ClientController@home')->name('/{slug}/dashboard');

/* Open and Close Route */
Route::get('/client/dashboard/clientStatus/{status}','ClientController@clientStatus');

/*************** Products Route ***************/
Route::get('/{slug}/products/product-add','ClientController@productGet');
Route::get('/{slug}/products/product-details','ClientController@productDetails');

/*************** Masters Routes **************/
/* Manager Route */
Route::get('/{slug}/masters/manager','ClientController@managerGet');
Route::post('/{slug}/masters/manager','ClientController@managerPost');

Route::get('/{slug}/masters/manager/{id}','ClientController@managerEditGet');
Route::post('/{slug}/masters/manager/{id}','ClientController@managerEditPost');
/* Waiter Route */
Route::get('/{slug}/masters/waiter','ClientController@waiterGet');
Route::post('/{slug}/masters/waiter','ClientController@waiterPost');

Route::post('/{slug}/masters/waiter/delete','ClientController@waiterDelete');

Route::get('/{slug}/masters/waiter/{id}','ClientController@waiterEditGet');
Route::post('/{slug}/masters/waiter/{id}','ClientController@waiterEditPost');


/* Tables Route*/
Route::get('/{slug}/masters/tables','ClientController@tableGet');
Route::post('/{slug}/masters/tables','ClientController@tablePost');

Route::post('/{slug}/masters/tables/delete','ClientController@tableDelete');
Route::post('/{slug}/masters/tables/edit','ClientController@tableEdit');


/*********** Transactions routes ************/
/*Billing Route */
Route::get('/{slug}/transactions/billing','ClientController@billingGet');

/*************** Reports Routes *************/
/* Stock Report */
Route::get('/{slug}/reports/stock-report','ClientController@stockReportGet');

/* Daily Report */
Route::get('/{slug}/reports/daily-report','ClientController@dailyReportGet');

/* Stock Statement */
Route::get('/{slug}/reports/stock-statement','ClientController@stockStatementGet');

/* Stock Verification */
Route::get('/{slug}/reports/stock-verification','ClientController@stockVerificationGet');

/*************** Profile Routes *************/
Route::get('/{slug}/profile','ClientController@profileGet');
Route::post('/{slug}/profile','ClientController@profileChangePassword');

/************************************************* Manager Side Route ***************************************************/
/* Dashboard/ Home page Route */
Route::get('/{slug}/manager/dashboard','ManagerController@home');
Route::get('/{slug}/manager/order-take','ManagerController@orderTake');
Route::get('/{slug}/manager/order-info','ManagerController@orderInfo');
Route::get('/{slug}/manager/billing','ManagerController@billing');
Route::get('/{slug}/manager/table-count','ManagerController@tableCount');

/* Profile Page Route */
Route::get('/{slug}/manager/profile','ManagerController@profileGet');
Route::post('/{slug}/manager/profile','ManagerController@profileChangePassword');
/*
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});*/
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');