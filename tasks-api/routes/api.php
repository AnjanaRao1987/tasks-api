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



$router->group(["prefix" => "tasks"], function ($router) {
	$router->post("", "Tasks@store");
	$router->get("", "Tasks@index");
    $router->get("{task}", "Tasks@show");
    $router->delete("{task}", "Tasks@destroy");
    $router->put("{task}", "Tasks@update");
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
