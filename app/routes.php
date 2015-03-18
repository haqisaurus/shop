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

/*route filter*/
Route::filter('admin', function()
{
	if (Auth::user()->role_id != 1 ) { 
		return Redirect::guest('_login');
	}
});

Route::filter('member', function()
{
	if (Auth::user()->role_id != 2 ) { 
		return Redirect::guest('login');
	}
});

/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */
Route::get('/', array('uses' => 'PagesController@index'));
Route::get('products', array('uses' => 'PagesController@product'));
Route::get('register', array('uses' => 'PagesController@register'));
Route::get('detail/{id}', array('uses' => 'PagesController@detail'));
Route::get('contact', array('uses' => 'PagesController@contact'));
Route::get('cart', array('uses' => 'PagesController@cart'));
Route::get('checkout', array('uses' => 'PagesController@checkout'));
Route::get('forget', array('uses' => 'PagesController@forget'));

Route::group(array('before' => 'member'), function() {
	Route::get('account', array('uses' => 'PagesController@account'));
});

/** ------------------------------------------
 *  Frontend Order Actions Routes
 *  ------------------------------------------
 */
Route::get('login', array('uses' => 'PagesController@login'));
Route::post('login', array('uses' => 'ActionController@doLogin'));

Route::get('_login', array('uses' => 'ActionController@showLoginAdmin'));
Route::post('_login', array('uses' => 'ActionController@doLoginAdmin'));
Route::get('logout', 'ActionController@doLogout');

Route::post('register', array('uses' => 'ActionController@register'));
Route::post('addToCart', array('uses' => 'ActionController@addToCart'));
Route::get('removeCart/{id}', array('uses' => 'ActionController@removeCart'));
Route::post('updateAccount/{id}', array('as' => 'updateAccount', 'uses' => 'ActionController@updateAccount'));



/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */

Route::group(array('before' => 'admin'), function() {
	Route::get('dashboard', function() { return View::make('admin.pages.dashboard'); });

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
	Route::resource('user', 'UserController');

	Route::get('message/{id}', array('as' => 'message.list', 'uses' => 'MessageController@index'));
	Route::resource('message', 'MessageController');

	Route::get('setting', function () {
		return View::make('admin.pages.setting.edit');
	});
});
