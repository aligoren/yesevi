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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// GET ROUTES

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customers', 'CustomerController@index')->name('customers');

Route::get('/customers/{id}', 'CustomerController@get')->name('customer');

Route::get('/users', 'UserController@index')->name('users');

// POST ROUTES

Route::post('/customers', 'CustomerController@store')->name('save_customers');

Route::post('/users', 'UserController@store')->name('save_users');
