<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\LikeController;

// 動作確認済み
Route::apiResource('/v1/user', UserController::class)->only([
        'store'
]);

// 動作確認済み
Route::apiResource('/v1/tweet', TweetController::class)->only([
        'index', 'store', 'destroy'
]);

// 動作確認済み
Route::apiResource('/v1/comment', CommentController::class)->only([
        'index', 'store', 'destroy'
]);

// 動作確認済み
Route::apiResource('/v1/like', LikeController::class)->only([
        'index', 'store', 'destroy'
]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
});
