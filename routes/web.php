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

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/user', 'UserController@show');
Route::post('/user', 'UserController@show');
Route::get('/item', 'ItemController@show',function ()
{return view('item');});
Route::resource('item', 'ItemController',
    ['only' => ['index', 'show']]);
Route::resource('item', 'ItemController',
    ['except' => ['create', 'store', 'update', 'destroy']]);
Route::post('/items', 'UserController@show');
Route::get('/roles', 'RoleController@show',function () {
    return view('roles');});
Route::post('/roles', 'UserController@show');
Route::get('/sales', 'SaleController@show', function () {return view('sales');});
Route::post('/sales', 'UserController@show');
Route::get('/histories', 'HistoryController@show',function () {return view('histories');});
Route::post('/histories', 'UserController@show');








