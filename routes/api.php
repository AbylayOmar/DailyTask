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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::post('/login', 'ApiController@login');
Route::middleware('auth:api')->apiResource('/tasks', 'TaskController');
Route::middleware('auth:api')->get('/daily/{id}', 'DailyController@index');
Route::middleware('auth:api')->post('/daily/{id}', 'DailyController@update');
Route::middleware('auth:api')->get('/challenges', 'ChallengeController@index');
Route::middleware('auth:api')->post('/results', 'DailyController@results');
Route::middleware('auth:api')->get('/statistic', 'DailyController@statistic');