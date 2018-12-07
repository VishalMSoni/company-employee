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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/company', 'HomeController@addCompany');
Route::get('/employee', 'HomeController@addEmployee');

Route::post('/addCompanyData', 'HomeController@addCompanyData');
Route::post('/addEmployeeData', 'HomeController@addEmployeeData');

Route::get('/showData', 'HomeController@showData');

Route::post('/editEmployeeData', 'HomeController@editEmployeeData');
Route::post('/updateEmployeeData', 'HomeController@updateEmployeeData');
