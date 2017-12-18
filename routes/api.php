<?php

use Illuminate\Http\Request;
use App\Item;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('items', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Item::all();
});
Route::get('items/{item}', function($id) {
    return Item::find($id);
});
Route::post('items', function(Request $request) {
    return Item::create($request->all);
});
Route::put('items/{item}', function(Request $request, $id) {
    $item = Item::findOrFail($id);
    $item->update($request->all());

    return $item;
});
Route::delete('items/{item}', function($id) {
   Item::find($id)->delete();

    return 204;
});
Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});
Route::resource('users', 'UserController');

Route::get('users',['as'=>'users.index','uses'=>'UserController@index']);
Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store']);
Route::get('users/edit/{user}',['as'=>'users.edit','uses'=>'UserController@edit']);
Route::patch('users/{user}',['as'=>'users.update','uses'=>'UserController@update']);
Route::delete('users/{user}',['as'=>'users.destroy','uses'=>'UserController@destroy']);
Route::get('users/{user}',['as'=>'users.show','uses'=>'UserController@show']);

Route::middleware('auth:api')->get('/items', function (Request $request) {
    return $request->item();
});
Route::get('/items/{item}', 'ItemController@show');

Route::middleware('auth:api')->get('/roles', function (Request $request) {
    return $request->role();
});
Route::middleware('auth:api')->get('/sales', function (Request $request) {
    return $request->sale();
});
Route::middleware('auth:api')->get('/histories', function (Request $request) {
    return $request->history();
});
