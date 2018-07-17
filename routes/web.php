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

Route::get('/', 'CompanyController@create')->name('root');
Route::post('/addcompany','CompanyController@store')->name('addcompany');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employeeform', 'EmployeeController@create')->name('getemployeeform');

Route::post('/addemployee','EmployeeController@store')->name('addemployee');


