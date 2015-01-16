<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    
});

Route::get('login', array('uses' => 'UserController@showLogin'));

Route::post('login', array('uses' => 'UserController@doLogin'));

Route::get('_admin', array('uses' => 'UserController@showAdminLogin'));

Route::group(array('before' => 'auth'), function()
{
    Route::get('dashboard', function()
    {
        // Has Auth Filter
                    
        echo "sudah masuk dashboard keluar" . HTML::link('logout', 'Logout', array('id' => 'linkid', 'class' => 'pull-right need-help'));

    });

    Route::get('logout', 'UserController@doLogout');
});

Route::get('dashboard', function() {
	return View::make('admin.pages.dashboard');
});

Route::get('category', function () {
	return View::make('admin.pages.list-category');
});

Route::get('product', function () {
	return View::make('admin.pages.list-product');
});

Route::get('supplier', function () {
	return View::make('admin.pages.list-supplier');
});

Route::get('order', function () {
	return View::make('admin.pages.list-order');
});

Route::get('return', function () {
	return View::make('admin.pages.list-return');
});

Route::get('mail', function () {
	return View::make('admin.pages.list-mail');
});

Route::get('user', function () {
	return View::make('admin.pages.list-user');
});

Route::get('setting', function () {
	return View::make('admin.pages.form-setting');
});
