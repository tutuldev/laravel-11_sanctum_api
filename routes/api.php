<?php

use App\Http\Controllers\API\AutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('signup',[AutController::class, 'signup']);
Route::post('login',[AutController::class, 'login']);
// simple
// Route::post('logout',[AutController::class, 'logout']);

// check login or not
Route::post('logout',[AutController::class, 'logout'])->middleware('auth:sanctum');
