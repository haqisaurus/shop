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

Route::get('categories', array('uses' => 'ProductController@listCategory', ));

	Route::get('add-category', array('uses' => 'ProductController@addCategory', ));

	Route::post('add-category', array('uses' => 'ProductController@addCategoryProgress', ));

Route::get('products', function () {
	return View::make('admin.pages.list-product');
});

	Route::get('add-product', function () {
		return View::make('admin.pages.form-product');
});

Route::get('suppliers', function () {
	return View::make('admin.pages.list-supplier');
});
	
	Route::get('add-supplier', function () {
		return View::make('admin.pages.form-supplier');
	});

Route::get('orders', function () {
	return View::make('admin.pages.list-order');
});

	Route::get('edit-order', function () {
		return View::make('admin.pages.form-order');
	});

	Route::get('detail-order', function () {
		return View::make('admin.pages.detail-order');
	});

Route::get('returns', function () {
	return View::make('admin.pages.list-return');
});

Route::get('messages', function () {
	return View::make('admin.pages.list-message');
});

Route::get('users', function () {
	return View::make('admin.pages.list-user');
});
	Route::get('edit-user', function () {
		return View::make('admin.pages.form-user');
	});

Route::get('settings', function () {
	return View::make('admin.pages.form-setting');
});
