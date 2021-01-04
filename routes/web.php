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
//Route::view('/', 'landing');

/************************************************ Super Admin Routes *******************************************/
/* Login Route */
Route::get('/','AdminController@login')->name('/');
Route::post('/login','AdminController@loginAdmin')->name('login');

/* Logout Route */
Route::get('/logout','AdminController@logout')->name('logout');

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
Route::get('/client/dashboard','ClientController@home')->name('/client/dashboard');

/*************** Masters Routes **************/
/* Products Route */
Route::get('/client/masters/product','ClientController@productGet');

/*
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});*/
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');