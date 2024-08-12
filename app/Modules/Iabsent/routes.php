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

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'iabsent'], function () { // middleware web, auth

    Route::group(['middleware' => ['role_or_permission:super admin|admin|iabsent member'], 'namespace' => 'Modules\Iabsent\Controllers'], function () {

        // Iabsent Dashboard
        Route::get('dashboard', 'DashboardController@index')->name('iabsent.dashboard');

        // Iabsent User
        Route::get('user', 'UserController@index')->name('iabsent.user');
        Route::get('user/detail/{id}', 'UserController@detail')->name('iabsent.user.detail');

        // Iabsent Profile
        Route::get('profile', 'ProfileController@index')->name('iabsent.profile');
        Route::post('profile/update', 'ProfileController@update')->name('iabsent.profile.update');

        // Iabsent Portfolio
        Route::get('portfolio', 'PortfolioController@index')->name('iabsent.portfolio');
        Route::post('portfolio/store', 'PortfolioController@store')->name('iabsent.portfolio.store');
        Route::get('portfolio/edit/{id}', 'PortfolioController@edit')->name('iabsent.portfolio.edit');
        Route::post('portfolio/update/{id}', 'PortfolioController@update')->name('iabsent.portfolio.update');
        Route::get('portfolio/detail/{id}', 'PortfolioController@detail')->name('iabsent.portfolio.detail');
        Route::post('portfolio/file', 'PortfolioController@file')->name('iabsent.portfolio.file');

        // Iabsent Article
        Route::get('article', 'ArticleController@index')->name('iabsent.article');
        Route::post('article/store', 'ArticleController@store')->name('iabsent.article.store');
        Route::get('article/edit/{id}', 'ArticleController@edit')->name('iabsent.article.edit');
        Route::post('article/update/{id}', 'ArticleController@update')->name('iabsent.article.update');
        Route::get('article/detail/{id}', 'ArticleController@detail')->name('iabsent.article.detail');
        Route::post('article/upload_image', 'ArticleController@upload_image')->name('iabsent.article.upload.image');
        Route::post('article/file', 'ArticleController@file')->name('iabsent.article.file');

        // Iabsent Activity
        Route::get('activity', 'ActivityController@index')->name('iabsent.activity');
    });
});
