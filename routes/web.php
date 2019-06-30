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
    return view('welcome');
});
Route::get('county', 'CountyController@index');
Route::get('town', 'TownController@index');
Route::get('town/id/{id}/getdata', array('before' => 'county', 'uses' => 'TownController@getTownById'));
Route::get('town/{county}', array('before' => 'county', 'uses' => 'TownController@browseByCounty'));
Route::get('updatetown/id/{id}/name/{name}', array('before' => 'id','before' => 'name', 'uses' => 'TownController@updateNameById'));
Route::get('inserttown/countyid/{countyId}/name/{name}', array('before' => 'countyId','before' => 'name', 'uses' => 'TownController@add'));
Route::get('deletetown/id/{id}', array('before' => 'id', 'uses' => 'TownController@deleteById'));
Route::post('addtownbyjson', ['uses' => 'TownController@addTownByJson']);