<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'localization'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('profile', 'ProfileController')->only([
            'index',
            'edit',
            'update',
        ]);

        Route::post('/updatepass','ProfileController@updatePasswordd')->name('update-password');
    });
    Route::get('/', function () {
        return view('welcome');
    });
    
    Auth::routes();
    
    Route::get('change-language/{language}', 'ChangeLanguageController@changeLanguage')->name('change-language');

    Route::get('/profile/{id}', 'UserController@profile')->name('user.profile');
    Route::get('/all-user', 'UserController@allUser')->name('all-user');
    Route::get('/follow/{id}', 'UserController@follow')->name('follow');
    Route::get('/unfollow/{id}', 'UserController@unfollow')->name('unfollow');

    Route::get('list-all-word','WordController@index')->name('list-all-word');
    Route::match(['get','post'], 'word-filter', 'WordController@filter')->name('word-filter');

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/sign-in/{social}', 'Auth\LoginController@socialLogin')->name('sign-in/social');
        Route::get('/sign-in/{social}/redirect', 'Auth\LoginController@socialRedirect')->name('sign-in/social/redirect');
    });
});
