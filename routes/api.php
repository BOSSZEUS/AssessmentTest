<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// route to post users
Route::post('/users', 'App\Http\Controllers\ApiController@create');
// route to get users
Route::get('/users', 'App\Http\Controllers\ApiController@show');
//route to get users by id
Route::get('/users/{id}','App\Http\Controllers\ApiController@ShowById');
// route to update users by id
Route::put('/users/update/{id}','App\Http\Controllers\ApiController@update');
// route to delete users by id
Route::delete('/users/delete/{id}', 'App\Http\Controllers\ApiController@delete');