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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'Controller@index');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/form', 'FormController@index');
Route::get('/form/create', 'FormController@create');
Route::get('/logout', 'AuthController@logout')->middleware('auth');

// Route::get('/dashboard', 'DashboardController@index');
Route::get('/bibit', 'ProyekController@index');
Route::get('/bibit/{id}/detail', 'ProyekController@detail');
Route::get('/bibit/{id}/form', 'ProyekController@form');
Route::get('/bibit/{id}/checkout', 'ProyekController@form_checkout');
Route::get('syarat-ketentuan', 'ProyekController@syarat_ketentuan');
Route::get('tentang', 'ProyekController@about');
Route::get('/admin', 'AdminController@showindex')->middleware('auth');
Route::post('/admin/create', 'AdminController@create')->middleware('auth');
Route::get('/admin/banner', 'AdminController@banner')->middleware('auth');
Route::post('/admin/create-banner', 'AdminController@create_banner')->middleware('auth');
Route::get('/admin/{id}/edit-banner', 'AdminController@edit_banner')->middleware('auth');
Route::post('/admin/{id}/update-banner', 'AdminController@update_banner')->middleware('auth');
Route::get('/admin/{id}/delete-banner', 'AdminController@delete_banner')->middleware('auth');
Route::get('/admin/{id}/edit', 'AdminController@edit')->middleware('auth');
Route::post('/admin/{id}/update', 'AdminController@update')->middleware('auth');
Route::get('/admin/{id}/delete', 'AdminController@delete')->middleware('auth');


Route::get('/belanja', 'TradesController@index');

// Timeline
Route::get('/timeline/{kode}/', 'ProyekController@time_line');
Route::get('/admin/timeline-desk', 'AdminController@time_line')->middleware('auth');
Route::post('/admin/create-timeline', 'AdminController@create_timeline')->middleware('auth');
Route::get('/admin/{id}/edit-timeline', 'AdminController@edit_timeline')->middleware('auth');
Route::post('/admin/{id}/update-timeline', 'AdminController@update_timeline')->middleware('auth');
Route::get('/admin/{id}/delete-timeline', 'AdminController@delete_timeline')->middleware('auth');

// Mitra
Route::get('/admin/mitra', 'AdminController@mitra')->middleware('auth');
Route::post('/admin/create-mitra', 'AdminController@create_mitra')->middleware('auth');
Route::get('/admin/{id}/edit-mitra', 'AdminController@edit_mitra')->middleware('auth');
Route::post('/admin/{id}/update-mitra', 'AdminController@update_mitra')->middleware('auth');
Route::get('/admin/{id}/delete-mitra', 'AdminController@delete_mitra')->middleware('auth');

// Route::post('/admin/createtrade', 'AdminController@createtrade')->middleware('auth');
// Route::get('/admin/trades', 'AdminController@trades')->middleware('auth');
// Route::get('/admin/trades/{id}/edittrade', 'AdminController@edittrade')->middleware('auth');
// Route::post('/admin/trades/{id}/updatetrade', 'AdminController@updatetrade')->middleware('auth');
// Route::get('/admin/trades/{id}/deletetrade', 'AdminController@deletetrade')->middleware('auth');
