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

Route::get('/', 'MyMainController@index');

Route::get('/user-details', 'MyMainController@userdetails')->name('page-one');

Route::post('/game-details', 'MyMainController@gamedetails')->name('game-details');
Route::get('/game-details-back', 'MyMainController@gamedetails')->name('game-details-back');

Route::post('/rules-details', 'MyMainController@rulesdetails')->name('rules-details');
Route::get('/rules-details-back', 'MyMainController@rulesdetails')->name('rules-details-back');

// Route::post('/3D-Visualization', 'MyMainController@visuals')->name('3DVisual');
// Route::get('/3D-Visualization-back', 'MyMainController@visuals')->name('3DVisual-back');

Route::post('/players-details', 'MyMainController@players')->name('players-details');
Route::get('/players-details-back', 'MyMainController@players')->name('players-details-back');

// Route::post('/computer-details', 'MyMainController@opponents')->name('opponents');
// Route::get('/computer-details-back', 'MyMainController@opponents')->name('opponents-back');

Route::post('/gameoptions-details', 'MyMainController@gameoptions')->name('game-options');
Route::get('/gameoptions-details-back', 'MyMainController@gameoptions')->name('game-options-back');

Route::post('/strategy-details', 'MyMainController@strategydetails')->name('strategy');
Route::get('/strategy-details-back', 'MyMainController@strategydetails')->name('strategy-details-back');


Route::post('/animations-details', 'MyMainController@animationsdetails')->name('animations');
Route::get('/animations-details-back', 'MyMainController@animationsdetails')->name('animations-back');

Route::post('/finalized-details', 'MyMainController@finalize')->name('finalize');
// Route::get('/finalized-details-back', 'MyMainController@finalize')->name('finalize');
