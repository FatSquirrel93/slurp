<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/users', ['uses' => 'App\DaF\Business\User\Controller\UserApiController@getAll']);

Route::get('/containers', ['uses' => 'App\DaF\Business\Container\Controller\ContainerApiController@getAll']);
Route::post('/container/create', ['uses' => 'App\DaF\Business\Container\Controller\ContainerApiController@create']);