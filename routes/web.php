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

Route::get('record/all', ['as' => 'record-all', 'uses' => 'RecordController@view']);
