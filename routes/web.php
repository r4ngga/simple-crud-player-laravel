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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });


//Routes Page
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

//Routes Players
Route::get('/players', 'PlayersController@index');
Route::get('/players/addplayer', 'PlayersController@create');
Route::get('/players/{player}', 'PlayersController@show');
Route::post('/players', 'PlayersController@store');
Route::delete('/players/{player}', 'PlayersController@destroy');
Route::get('/players/{player}/change', 'PlayersController@edit');
Route::patch('/players/{player}', 'PlayersController@update');


//this route can change all routes in above, but i'm not recommended
//because for a newbie so risk. and then if you use this simply routes
//name of class from Controller you must equalize with the name
//default controller

// Route::resource('players', 'PlayersController');
