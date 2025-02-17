<?php

use App\Http\Controllers\API\AutController;
use App\Http\Controllers\API\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('signup',[AutController::class, 'signup']);
Route::post('login',[AutController::class, 'login']);
// simple
// Route::post('logout',[AutController::class, 'logout']);

// check login or not
// with out group
// Route::post('logout',[AutController::class, 'logout'])->middleware('auth:sanctum');

// api resource
// with out group
// Route::apiResource('posts',PostController::class)->middleware('auth:sanctum');


// group api Middleware route
Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout',[AutController::class, 'logout']);
    Route::apiResource('posts',PostController::class);

});
