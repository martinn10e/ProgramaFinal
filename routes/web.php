<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('movies', 'MovieController');
Route::resource('consumables','ConsumableController');
Route::resource('entrances','EntranceController');
Route::resource('funtions','FuntionController');
Route::resource('rooms','RoomController');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('movies-pdf', 'MovieController@exportToPDF')->name('movies.pdf');
Route::get('rooms-pdf', 'RoomController@exportToPDF')->name('rooms.pdf');
Route::get('consumables-pdf', 'ConsumableController@exportToPDF')->name('consumables.pdf');
Route::get('entrances-pdf', 'EntranceController@exportToPDF')->name('entrances.pdf');
Route::get('funtions-pdf', 'FuntionController@exportToPDF')->name('funtions.pdf');

Route::get('/moviesXLS', 'MovieController@exportToXls');
Route::get('/moviesCSV', 'MovieController@exportToCsv');

Route::get('/roomsXLS', 'RoomController@exportToXls');
Route::get('/roomsCsv', 'RoomController@exportToCsv');

Route::get('/ConsumablesXLS', 'ConsumableController@exportToXls');
Route::get('/ConsumablesCSV', 'ConsumableController@exportToCsv');

Route::get('/entrancesXLS', 'EntranceController@exportToXls');
Route::get('/entrancesCSV', 'EntranceController@exportToCsv');

Route::get('/funtionsXLS', 'FuntionController@exportToXls');
Route::get('/funtionsCSV', 'FuntionController@exportToCsv');

Route::get('graficas.graficarMovies', 'GraficasController@graficarMovies')->name('movies.grafica');
Route::get('graficas.graficarRooms', 'GraficasController@graficarRooms')->name('rooms.grafica');
Route::get('graficas.graficarConsumables', 'GraficasController@graficarConsumables')->name('consumables.grafica');
Route::get('graficas.graficarEntrances', 'GraficasController@graficarEntrances')->name('entrances.grafica');
Route::get('graficas.graficarFuntions', 'GraficasController@graficarFuntions')->name('funtions.grafica');



Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
