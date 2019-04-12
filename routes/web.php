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

Route::get('/', 'main@index');

Route::get('auth', 'adminCtr@auth')->name('auth');
Route::get('log_out', 'adminCtr@log_out')->name('log_out');
Route::post('authentification', 'adminCtr@authentification')->name('authentification');

Route::get('member', 'adminCtr@index_member')->name('member.index');
Route::get('member/{member}', 'adminCtr@show_member')->name('member.show');
Route::post('member', 'adminCtr@store_member')->name('member.store');
Route::post('member/{member}', 'adminCtr@update_member')->name('member.update');
Route::delete('member/{member}', 'adminCtr@destroy_member')->name('member.destroy');

Route::get('team', 'adminCtr@index_team')->name('team.index');
Route::get('team/{team}', 'adminCtr@show_team')->name('team.show');
Route::post('team', 'adminCtr@store_team')->name('team.store');
Route::post('team/{team}', 'adminCtr@update_team')->name('team.update');
Route::delete('team/{team}', 'adminCtr@destroy_team')->name('team.destroy');

Route::post('admin/{admin}', 'adminCtr@update')->name('admin.update');
Route::resource('admin', 'adminCtr');