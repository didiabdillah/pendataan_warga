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

//Logout
Route::get('/logout', 'AuthController@logout')->name('logout');

//AUTH PAGE (NOT LOGIN REQUIRED)
Route::group(['middleware' => ['prevent_Back_Button']], function () {
    Route::group(['middleware' => ['is_Not_Login']], function () {
        //Login
        Route::get('/login', 'AuthController@login')->name('login');
        Route::post('/login', 'AuthController@login_process')->name('login_process');

        //Forgot Password
        Route::get('/forgot', 'AuthController@forgot_password')->name('forgot_password');
        Route::post('/forgot', 'AuthController@forgot_password_process')->name('forgot_password_process');

        //Change To New Password (Forgot Password)
        Route::get('/{email}/{token}/change', 'AuthController@change_password')->name('change_password');
        Route::post('/{email}/{token}/change', 'AuthController@change_password_process')->name('change_password_process');
    });
});

//ADMIN PAGE (LOGIN REQUIRED)
Route::group(['middleware' => ['prevent_Back_Button']], function () {
    Route::group(['middleware' => ['is_Login']], function () {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::get('/report', 'ReportController@index')->name('report');
    });

    //Profile
    Route::group(['prefix' => 'u'], function () {
        Route::get('/{id}', 'ProfileController@index')->name('profile');
        Route::get('/{id}/setting', 'ProfileController@setting')->name('profile_setting');
        Route::patch('/{id}/setting', 'ProfileController@profile_update')->name('profile_setting_update');
        Route::put('/{id}/setting', 'ProfileController@password_update')->name('profile_setting_update_password');
        Route::patch('/{id}/setting/picture', 'ProfileController@picture_update')->name('profile_setting_update_picture');
    });
});


Route::get('/', 'LandingController@index')->name('landing');
Route::post('/', 'LandingController@store')->name('landing_form_process');
Route::get('/data/covid', 'LandingController@covid')->name('landing_data_covid');

Route::get('/cek', 'LandingController@cek')->name('landing_cek');
Route::post('/cek/{nik}', 'LandingController@cek_process')->name('landing_cek_process');
