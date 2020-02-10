<?php

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

// Auth::routes();
Route::get('/', 'ServiceRequestsController@index')->name('shome');
Route::get('{id}', 'ServiceRequestsController@edit')->name('edit');
Route::get('serviceRequest/create', 'ServiceRequestsController@serviceRequestCreate')->name('serviceRequest.create');
Route::get('getVehicleModel/{id}', 'ServiceRequestsController@getVehicleModel')->name('getVehicleModel');
Route::post('serviceRequest/store', 'ServiceRequestsController@store')->name('serviceRequest.store');
Route::get('serviceRequest/edit/{id}', 'ServiceRequestsController@edit')->name('serviceRequest.edit');
Route::put('serviceRequest/update/{id}', 'ServiceRequestsController@update')->name('serviceRequest.update');
Route::delete('serviceRequest/delete/{id}', 'ServiceRequestsController@destroy')->name('serviceRequest.delete');
