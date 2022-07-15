<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\LikeController;


Route::apiResource('/v1/user', UserController::class)->only([
        'store'
]);
// ユーザー新規登録 store

Route::apiResource('/v1/tweet', TweetController::class)->only([
        'index', 'store', 'destroy'
]);
// tweet投稿 store , tweet一覧表示 index , tweet削除 destroy

Route::apiResource('/v1/comment', CommentController::class)->only([
        'index','store', 'destroy'
]);

Route::apiResource('/v1/like', LikeController::class)->only([
        'index', 'store', 'destroy'
]);

Route::get('/v1/user', [UserController::class, 'show']);

Route::get('/v1/tweet/comment', [TweetController::class, 'show']);
// tweet 



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
});
