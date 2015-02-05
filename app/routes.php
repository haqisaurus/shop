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
Route::post('_admin', array('uses' => 'UserController@doLoginAdmin'));

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
Route::get('product/files/{id}', array('as' => 'product.files', 'uses' => 'ProductController@createFiles'));
Route::resource('product', 'ProductController');


Route::get('user/search', array('as' => 'user.search', 'uses' => 'UserController@search'));
Route::get('user/login', array('as' => 'user.login', 'uses' => 'UserController@showLogin'));
Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@doLogin'));
Route::resource('user', 'UserController');


Route::get('message/{id}', array('as' => 'message.list', 'uses' => 'MessageController@index'));
Route::resource('message', 'MessageController');

Route::get('setting', function () {
	return View::make('admin.pages.setting.edit');
});
