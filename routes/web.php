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

Route::get('/', function () {
    return view('front.index');
});
Route::view('career','front.career')->name('career');
Route::view('about-us','front.about_us')->name('about-us');
Route::view('pricing','front.pricing')->name('pricing');

Route::get('adminp/login','Auth\LoginController@showLoginForm')->name('get-login');
Route::get('adminp/register','Auth\RegisterController@showRegistrationForm')->name('get-register');
Route::group(['prefix'=>'adminp','middleware'=>'auth'],function(){

    Route::get('/','AdminController@index')->name('dashboard')->middleware('auth');
});
// Auth::routes();
Route::post('logout','Auth\LoginController@logout')->middleware('web')->name('logout');
Route::post('register','Auth\RegisterController@register')->name('register');
Route::post('login','Auth\LoginController@login')->name('login');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email')->middleware('web');

Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.reset');