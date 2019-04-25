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
Route::get('/', 'Main@index')->name('home');
Route::get('event', 'Main@event')->name('event');
Route::get('event/{slug}', 'Main@eventdetail')->name('eventdetail');
Route::get('promo', 'Main@promo')->name('promo');
Route::get('promo/{slug}', 'Main@promodetail')->name('promodetail');
Route::get('blog', 'Main@blog')->name('blog');
Route::get('blog/{slug}', 'Main@blogdetail')->name('blogdetail');
Route::get('treatment', 'Main@treatment')->name('treatment');
Route::get('treatment/{slug}', 'Main@treatmentdetail')->name('treatmentdetail');
Route::get('contactus', 'Main@contactus')->name('contactus');
Route::get('aboutus', 'Main@aboutus')->name('aboutus');
//END Main FrontEND


Route::get('auth', 'AdminCtr1@auth')->name('auth');
Route::get('log_out', 'AdminCtr1@log_out')->name('log_out');
Route::post('authentification', 'AdminCtr1@authentification')->name('authentification');

Route::get('admin/profile', 'AdminCtr2@index_profile')->name('profile.index');
Route::post('admin/profile/update', 'AdminCtr2@update_profile')->name('profile.update');

Route::get('admin/config', 'AdminCtr2@index_config')->name('config.index');
Route::post('admin/config/update', 'AdminCtr2@update_config')->name('config.update');

Route::get('admin/consultation', 'AdminCtr2@index_consultation')->name('consultation.index');
Route::get('admin/consultation/{consultation}', 'AdminCtr2@show_consultation')->name('consultation.show');

Route::get('admin/member', 'AdminCtr1@index_member')->name('member.index');
Route::get('admin/member/{member}', 'AdminCtr1@show_member')->name('member.show');
Route::post('admin/member', 'AdminCtr1@store_member')->name('member.store');
Route::post('admin/member/{member}', 'AdminCtr1@update_member')->name('member.update');
Route::delete('admin/member/{member}', 'AdminCtr1@destroy_member')->name('member.destroy');

Route::get('admin/team', 'AdminCtr1@index_team')->name('team.index');
Route::get('admin/team/add', 'AdminCtr1@add_team')->name('team.add');
Route::get('admin/team/{team}', 'AdminCtr1@show_team')->name('team.show');
Route::post('admin/team', 'AdminCtr1@store_team')->name('team.store');
Route::post('admin/team/{team}', 'AdminCtr1@update_team')->name('team.update');
Route::delete('admin/team/{team}', 'AdminCtr1@destroy_team')->name('team.destroy');

Route::get('admin/slide', 'AdminCtr1@index_slide')->name('slide.index');
Route::get('admin/slide/add', 'AdminCtr1@add_slide')->name('slide.add');
Route::get('admin/slide/{slide}', 'AdminCtr1@show_slide')->name('slide.show');
Route::post('admin/slide', 'AdminCtr1@store_slide')->name('slide.store');
Route::post('admin/slide/{slide}', 'AdminCtr1@update_slide')->name('slide.update');
Route::delete('admin/slide/{slide}', 'AdminCtr1@destroy_slide')->name('slide.destroy');

Route::get('admin/treatment', 'AdminCtr1@index_treatment')->name('treatment.index');
Route::get('admin/treatment/add', 'AdminCtr1@add_treatment')->name('treatment.add');
Route::get('admin/treatment/{treatment}', 'AdminCtr1@show_treatment')->name('treatment.show');
Route::post('admin/treatment', 'AdminCtr1@store_treatment')->name('treatment.store');
Route::post('admin/treatment/{treatment}', 'AdminCtr1@update_treatment')->name('treatment.update');
Route::delete('admin/treatment/{treatment}', 'AdminCtr1@destroy_treatment')->name('treatment.destroy');

Route::get('admin/blog', 'AdminCtr2@index_blog')->name('blog.index');
Route::get('admin/blog/add', 'AdminCtr2@add_blog')->name('blog.add');
Route::get('admin/blog/{blog}', 'AdminCtr2@show_blog')->name('blog.show');
Route::post('admin/blog', 'AdminCtr2@store_blog')->name('blog.store');
Route::post('admin/blog/{blog}', 'AdminCtr2@update_blog')->name('blog.update');
Route::delete('admin/blog/{blog}', 'AdminCtr2@destroy_blog')->name('blog.destroy');

Route::get('admin/service', 'AdminCtr2@index_service')->name('service.index');
Route::get('admin/service/add', 'AdminCtr2@add_service')->name('service.add');
Route::get('admin/service/{service}', 'AdminCtr2@show_service')->name('service.show');
Route::post('admin/service', 'AdminCtr2@store_service')->name('service.store');
Route::post('admin/service/{service}', 'AdminCtr2@update_service')->name('service.update');
Route::delete('admin/service/{service}', 'AdminCtr2@destroy_service')->name('service.destroy');

Route::get('admin/event', 'AdminCtr2@index_event')->name('event.index');
Route::get('admin/event/add', 'AdminCtr2@add_event')->name('event.add');
Route::get('admin/event/{event}', 'AdminCtr2@show_event')->name('event.show');
Route::post('admin/event', 'AdminCtr2@store_event')->name('event.store');
Route::post('admin/event/{event}', 'AdminCtr2@update_event')->name('event.update');
Route::delete('admin/event/{event}', 'AdminCtr2@destroy_event')->name('event.destroy');

Route::post('admin/admin/{admin}', 'AdminCtr1@update')->name('admin.update');
Route::resource('admin/admin', 'AdminCtr1');