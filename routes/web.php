<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('contents.dashboard-home');
});

Route::get('record/add', ['as' => 'record-add', 'uses' => 'RecordController@create']);

Route::get('record/edit/{id}', ['as' => 'record-edit', 'uses' => 'RecordController@edit']);

Route::get('record/list', ['as' => 'record-list', 'uses' => 'RecordController@index']);

Route::post('record/add', ['as' => 'record-store', 'uses' => 'RecordController@store']);

Route::delete('record/delete/{id}', ['as' => 'record-delete', 'uses' => 'RecordController@destroy']);

Route::put('record/update/{id}', ['as' => 'record-update', 'uses' => 'RecordController@update']);