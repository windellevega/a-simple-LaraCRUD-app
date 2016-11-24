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

Route::get('record/add', ['as' => 'record-add', 'uses' => 'RecordController@index']);

Route::get('record/list', ['as' => 'record-list', 'uses' => 'RecordController@listRecords']);

Route::post('record/add', ['as' => 'record-store', 'uses' => 'RecordController@store']);

Route::post('record/delete/{id}', ['as' => 'record-delete', 'uses' => 'RecordController@destroy']);