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

Route::get('/', 'RoomsController@index');

Route::get('create', 'RoomsController@create');
Route::post('store', 'RoomsController@store');
Route::get('/{rooms}/show', 'RoomsController@show');
Route::get('/{rooms}/edit', 'RoomsController@edit');
Route::get('/preview', 'RoomsController@view');
Route::patch('/{rooms}/update', 'RoomsController@update');
Route::delete('/{rooms}/delete', 'RoomsController@destroy');


Route::get('/{rooms}/create', 'MeetingController@create');
Route::post('{rooms}/store', 'MeetingController@store');
Route::get('create_meeting', 'MeetingController@createNew');
Route::post('/meetings/store','MeetingController@store');


