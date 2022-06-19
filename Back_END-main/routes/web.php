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
/***
 * My custom authentication routes
 * I am not using them now though
 * ***/
Route::get('/', 'PagesController@index');
Route::post('/registerCompany', 'PagesController@reg_company')->name('registerCompany');
Route::post('/loginCompany', 'PagesController@log_company')->name('loginCompany');
/********************/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/**My company dashboard
 * Not currently in use too
 * **/
Route::get('/dashboardCompany', 'HomeController@company')->name('dashboardCompany');
/**********/
