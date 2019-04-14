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

Route::get('auth', 'adminCtr1@auth')->name('auth');
Route::get('log_out', 'adminCtr1@log_out')->name('log_out');
Route::post('authentification', 'adminCtr1@authentification')->name('authentification');

Route::get('member', 'adminCtr1@index_member')->name('member.index');
Route::get('member/{member}', 'adminCtr1@show_member')->name('member.show');
Route::post('member', 'adminCtr1@store_member')->name('member.store');
Route::post('member/{member}', 'adminCtr1@update_member')->name('member.update');
Route::delete('member/{member}', 'adminCtr1@destroy_member')->name('member.destroy');

Route::get('team', 'adminCtr1@index_team')->name('team.index');
Route::get('team/{team}', 'adminCtr1@show_team')->name('team.show');
Route::post('team', 'adminCtr1@store_team')->name('team.store');
Route::post('team/{team}', 'adminCtr1@update_team')->name('team.update');
Route::delete('team/{team}', 'adminCtr1@destroy_team')->name('team.destroy');

Route::get('slide', 'adminCtr1@index_slide')->name('slide.index');
Route::get('slide/{slide}', 'adminCtr1@show_slide')->name('slide.show');
Route::post('slide', 'adminCtr1@store_slide')->name('slide.store');
Route::post('slide/{slide}', 'adminCtr1@update_slide')->name('slide.update');
Route::delete('slide/{slide}', 'adminCtr1@destroy_slide')->name('slide.destroy');

Route::get('treatment', 'adminCtr1@index_treatment')->name('treatment.index');
Route::get('treatment/{treatment}', 'adminCtr1@show_treatment')->name('treatment.show');
Route::post('treatment', 'adminCtr1@store_treatment')->name('treatment.store');
Route::post('treatment/{treatment}', 'adminCtr1@update_treatment')->name('treatment.update');
Route::delete('treatment/{treatment}', 'adminCtr1@destroy_treatment')->name('treatment.destroy');

Route::get('blog', 'adminCtr2@index_blog')->name('blog.index');
Route::get('blog/{blog}', 'adminCtr2@show_blog')->name('blog.show');
Route::post('blog', 'adminCtr2@store_blog')->name('blog.store');
Route::post('blog/{blog}', 'adminCtr2@update_blog')->name('blog.update');
Route::delete('blog/{blog}', 'adminCtr2@destroy_blog')->name('blog.destroy');

Route::post('admin/{admin}', 'adminCtr1@update')->name('admin.update');
Route::resource('admin', 'adminCtr1');