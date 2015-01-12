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
    // Has Auth Filter
});

Route::get('login', array('uses' => 'UserController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'UserController@doLogin'));


Route::group(array('before' => 'auth'), function()
{
    Route::get('dashboard', function()
    {
        // Has Auth Filter
        echo "sudah masuk dashboard";

    });

    Route::get('logout', 'UserController@doLogout');
});
