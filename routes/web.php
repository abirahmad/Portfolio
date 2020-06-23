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

// Frontend

Route::get('/','Frontend\PortfolioHomeController@index')->name('index');
Route::get('/project-details/{id}','Frontend\PortfolioHomeController@show')->name('portfolio.show');




Route::group(['prefix' => 'admin'], function () {

	Auth::routes();

	Route::get('/login','Backend\Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login/submit','Backend\Auth\LoginController@login')->name('admin.login.submit');
	Route::post('/logout','Backend\Auth\LoginController@logout')->name('admin.logout');

	// Social Login
	Route::get('login/facebook', 'Backend\Auth\LoginController@redirectToProvider')->name('login.facebook');
	Route::get('login/facebook/callback', 'Backend\Auth\LoginController@handleProviderCallback');

	Route::get('/', 'Backend\PagesController@index')->name('admin.index');

	Route::get('/users','Backend\AdminController@edit')->name('admin.users.edit');
	Route::post('/users/update/{id}','Backend\AdminController@update')->name('admin.users.update');


	Route::group(['as' => 'admin.'],function(){
		Route::resource('portfolios','Backend\PortfolioController');
		Route::post('portfolios/delete/{id}', 'Backend\PortfolioController@destroy');
		Route::get('menus','Backend\PortfolioController@getMenu')->name('admin.menus');
		Route::get('skills','Backend\PortfolioController@getSkills')->name('admin.skills');
		Route::get('experience','Backend\PortfolioController@getExperience')->name('admin.experience');
		Route::get('banners','Backend\PortfolioController@getBanner')->name('admin.banners');
		Route::get('services','Backend\PortfolioController@getService')->name('admin.services');

	});
	Route::post('menus/store','Backend\PortfolioController@postMenu')->name('admin.menus.store');
	Route::post('menus/delete/{id}','Backend\PortfolioController@deleteMenu')->name('admin.menus.delete');

	Route::post('skills/store','Backend\PortfolioController@postSkills')->name('admin.skills.store');
	Route::post('skills/delete/{id}','Backend\PortfolioController@deleteSkill')->name('admin.skills.delete');

	Route::post('experience/store','Backend\PortfolioController@postExperience')->name('admin.experience.store');
	Route::post('experience/delete/{id}','Backend\PortfolioController@deleteExperience')->name('admin.experience.delete');

	Route::post('banners/update','Backend\PortfolioController@updateBanner')->name('admin.banners.update');

	Route::post('services/store','Backend\PortfolioController@postService')->name('admin.services.store');
	Route::post('services/delete/{id}','Backend\PortfolioController@deleteService')->name('admin.services.delete');

});

// Route::get('/', 'HomeController@index')->name('admin.index');
