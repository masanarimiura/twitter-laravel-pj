<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::apiResource('/v1/user', UserController::class)->only([
  'index', 'store', 'destroy'
]);;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
