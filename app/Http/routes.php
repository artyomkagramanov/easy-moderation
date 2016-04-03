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
Route::group(['middleware' => 'web', 'prefix' => '{resourse}'], function() {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/import', 'ImportsController@index');
	Route::post('/import', 'ImportsController@store');
    Route::get('/export', 'ExportsController@index');
    Route::get('/tags', 'TagsController@index');
});
