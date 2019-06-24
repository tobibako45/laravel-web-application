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

Route::get('/home', function () {
    return view('home');
});

/** ユーザー登録 */
// RegisterControllerでuseしているRegistersUsersトレイトのshowRegistrationFormメソッドが呼ばれる。
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
// RegisterControllerでuseしているRegistersUsersトレイトのregisterメソッドが呼ばれる。
Route::post('auth/register', 'Auth\RegisterController@register');

/** ユーザー認証 */
// LoginControllerでuseしているAuthenticatesUsersトレイトのshowLoginFormメソッドが呼ばれる
Route::get('auth/login', 'Auth\LoginController@showLoginForm');
// LoginControllerでuseしているAuthenticatesUsersトレイトのloginメソッドが呼ばれる
Route::post('auth/login', 'Auth\LoginController@login');

Route::get('auth/logout', 'Auth\LoginController@logout');
