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

Route::get('/', function () {return view('welcome');});
Route::get('/pages/home', 'controller_main@home')->name('home');
Route::get('/edit/{id}', 'controller_main@edit')->name('edit');
Route::get('/employee_detail/{id}', 'controller_main@employee_detail')->name('employee_detail');
Route::post('/description/{id}', 'controller_main@update')->name('update');
