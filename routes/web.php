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


//Start Main FrontEND
Route::get('/', 'main@index')->name('home');
Route::get('event', 'main@event')->name('event');
Route::get('event/{slug}', 'main@eventdetail')->name('eventdetail');
Route::get('promo', 'main@promo')->name('promo');
Route::get('promo/{slug}', 'main@promodetail')->name('promodetail');
Route::get('blog', 'main@blog')->name('blog');
Route::get('blog/{slug}', 'main@blogdetail')->name('blogdetail');
Route::get('treatment', 'main@treatment')->name('treatment');
Route::get('treatment/{slug}', 'main@treatmentdetail')->name('treatmentdetail');
Route::get('contactus', 'main@contactus')->name('contactus');
Route::get('aboutus', 'main@aboutus')->name('aboutus');
//END Main FrontEND


Route::get('auth', 'adminCtr1@auth')->name('auth');
Route::get('log_out', 'adminCtr1@log_out')->name('log_out');
Route::post('authentification', 'adminCtr1@authentification')->name('authentification');

Route::get('admin/profile', 'adminCtr2@index_profile')->name('profile.index');
Route::post('admin/profile/update', 'adminCtr2@update_profile')->name('profile.update');

Route::get('admin/member', 'adminCtr1@index_member')->name('member.index');
Route::get('admin/member/{member}', 'adminCtr1@show_member')->name('member.show');
Route::post('admin/member', 'adminCtr1@store_member')->name('member.store');
Route::post('admin/member/{member}', 'adminCtr1@update_member')->name('member.update');
Route::delete('admin/member/{member}', 'adminCtr1@destroy_member')->name('member.destroy');

Route::get('admin/team', 'adminCtr1@index_team')->name('team.index');
Route::get('admin/team/add', 'adminCtr1@add_team')->name('team.add');
Route::get('admin/team/{team}', 'adminCtr1@show_team')->name('team.show');
Route::post('admin/team', 'adminCtr1@store_team')->name('team.store');
Route::post('admin/team/{team}', 'adminCtr1@update_team')->name('team.update');
Route::delete('admin/team/{team}', 'adminCtr1@destroy_team')->name('team.destroy');

Route::get('admin/slide', 'adminCtr1@index_slide')->name('slide.index');
Route::get('admin/slide/add', 'adminCtr1@add_slide')->name('slide.add');
Route::get('admin/slide/{slide}', 'adminCtr1@show_slide')->name('slide.show');
Route::post('admin/slide', 'adminCtr1@store_slide')->name('slide.store');
Route::post('admin/slide/{slide}', 'adminCtr1@update_slide')->name('slide.update');
Route::delete('admin/slide/{slide}', 'adminCtr1@destroy_slide')->name('slide.destroy');

Route::get('admin/treatment', 'adminCtr1@index_treatment')->name('treatment.index');
Route::get('admin/treatment/add', 'adminCtr1@add_treatment')->name('treatment.add');
Route::get('admin/treatment/{treatment}', 'adminCtr1@show_treatment')->name('treatment.show');
Route::post('admin/treatment', 'adminCtr1@store_treatment')->name('treatment.store');
Route::post('admin/treatment/{treatment}', 'adminCtr1@update_treatment')->name('treatment.update');
Route::delete('admin/treatment/{treatment}', 'adminCtr1@destroy_treatment')->name('treatment.destroy');

Route::get('admin/blog', 'adminCtr2@index_blog')->name('blog.index');
Route::get('admin/blog/add', 'adminCtr2@add_blog')->name('blog.add');
Route::get('admin/blog/{blog}', 'adminCtr2@show_blog')->name('blog.show');
Route::post('admin/blog', 'adminCtr2@store_blog')->name('blog.store');
Route::post('admin/blog/{blog}', 'adminCtr2@update_blog')->name('blog.update');
Route::delete('admin/blog/{blog}', 'adminCtr2@destroy_blog')->name('blog.destroy');

Route::post('admin/admin/{admin}', 'adminCtr1@update')->name('admin.update');
Route::resource('admin/admin', 'adminCtr1');