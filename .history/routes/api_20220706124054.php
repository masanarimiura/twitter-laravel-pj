<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentController;

Route::apiResource('/v1/user', UserController::class)->only([
        'store'
]);

Route::apiResource('/v1/tweet', TweetController::class)->only([
        'index', 'store', 'show', 'destroy'
]);

Route::apiResource('/v1/comment', CommentController::class)->only([
        'store', 'show', 'destroy'
]);

Route::apiResource('/v1/like', LikeController::class)->only([
        'store', 'show', 'destroy'
]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
