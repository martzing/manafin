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

Route::get('/', function () {
    return view('index');
});

Route::get('Manafin', 'ManafinController@index');
Route::get('showdata', 'ManafinController@showData');
Route::get('testChart', 'ManafinController@testChart');
Route::post('callWebService', 'ManafinCallWebService@callDataFromWebService');
Route::get('callReferentData', 'ReferentData@callReferentData');
Route::get('getAllPromotionData', 'ReferentData@getAllPromotionData');



/*Route::get('/', function () {
    return view('welcome');
});*/
