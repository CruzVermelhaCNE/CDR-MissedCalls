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



Route::group(array('domain' => 'chamadasperdidas.salop'), function () {
    Route::get('/', function () {
        return view('missedcalls');
    });
});

Route::group(array('domain' => 'callbacks.salop'), function () {
    Route::get('/', function () {
        return view('callbacks');
    });
});

Route::get('missed_calls.json', 'CDRMissedCallsController@fetch');
Route::get('callbacks.json', 'CDRBusyCallsController@fetch');
