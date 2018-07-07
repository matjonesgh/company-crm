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

// Admin Dashboard Routes
Route::get  ('/', 'DashboardController@index')->name('dashboard');
        
// Authentication Routes...
Route::get  ('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post ('login', 'Auth\LoginController@login');
Route::post ('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get  ('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post ('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get  ('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post ('password/reset', 'Auth\ResetPasswordController@reset');

// Company Routes
Route::resource ('company','CompanyController');

// this could be implemented with a popup confirmation if preferred
Route::get      ('company/{id}/delete', 'CompanyController@delete')->name('company.delete');
Route::post     ('company/{id}/delete', 'CompanyController@destroy');

// Employee Routes
Route::resource ('employee','EmployeeController');

// this could be implemented with a popup confirmation if preferred
Route::get  ('employee/{id}/delete', 'EmployeeController@delete')->name('employee.delete');
Route::post ('employee/{id}/delete', 'EmployeeController@destroy');



