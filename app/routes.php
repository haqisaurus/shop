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
	return View::make('admin.pages.dashboard');
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

Route::post('category/delAll', array('as' => 'category.deleteAll', 'uses' => 'CategoryController@destroyAll'));
Route::get('category/search', array('as' => 'category.search', 'uses' => 'CategoryController@search'));
Route::resource('category', 'CategoryController');

Route::post('supplier/delAll', array('as' => 'supplier.deleteAll', 'uses' => 'SupplierController@destroyAll'));
Route::get('supplier/search', array('as' => 'supplier.search', 'uses' => 'SupplierController@search'));
Route::resource('supplier', 'SupplierController');


Route::post('product/delAll', array('as' => 'product.deleteAll', 'uses' => 'ProductController@destroyAll'));
Route::get('product/search', array('as' => 'product.search', 'uses' => 'ProductController@search'));
Route::post('product/upload', array('as' => 'product.upload', 'uses' => 'ProductController@upload'));
Route::resource('product', 'ProductController');

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

		$setting = Setting::all();
		foreach ($setting as $key => $value) {
			print_r($value->name);
		}

        // $setting->name = "Nova";
        // $setting->owner = "admin";
        // $setting->address = "jakal";
        // $setting->email = "haqisalla@gmail.com";
        // $setting->telephone = "099878789";
        // $setting->logo = "admin";
        // $setting->save();
	// return View::make('admin.pages.setting.edit');
});
