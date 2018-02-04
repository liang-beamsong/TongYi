<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('home');
});

/**
 * 后台路由组
 */
Route::group(['middleware'=>'adminlogin'], function(){
	//后台首页
	Route::get('admin','Admin\IndexController@index');
	Route::get('logout','Admin\LoginController@logout');

	/**
	 * 后台一级导航路由
	 */
	Route::controller('article','Admin\ArticleController');
	Route::controller('activity','Admin\ActivityController');
	Route::controller('dynamic','Admin\DynamicController');
	Route::controller('advantage','Admin\AdvantageController');
	Route::controller('partner','Admin\PartnerController');

	Route::controller('nav','Admin\NavigationController');
	//company 公司简介  config 首页配置
	Route::controller('company','Admin\ConfigController');
	Route::controller('config','Admin\ConfigController');

	Route::controller('links','Admin\LinksController');
	Route::controller('message','Admin\messageController');
});

/**
 * 登录
 */
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/login','Admin\LoginController@login');

/**
 * 前台栏目
 */
Route::get('home','Home\IndexController@index');
Route::get('about','Home\AboutController@index');
Route::get('campus','Home\CampusController@index');
Route::get('show','Home\ShowController@index');
Route::get('course','Home\CourseController@index');
Route::get('activity','Home\ActivityController@index');