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

Route::get('/apply', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/charts', 'HomeController@chart')->name('charts');
Route::get('/flows', 'HomeController@flow')->name('flows');
Route::get('/room1', 'HomeController@getRoom1')->name('room1');
Route::get('/room2', 'HomeController@getRoom2')->name('room2');
Route::get('/room3', 'HomeController@getRoom3')->name('room3');
Route::get('/sensoring/{storing}', 'SensorController@getStorings')->name('sensorsdatabase');
Route::resource('/sensors', 'SensorController');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

/*
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
*/