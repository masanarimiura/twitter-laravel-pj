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
// tweet一覧表示 index , tweet投稿 store , tweet削除 destroy

Route::apiResource('/v1/like', LikeController::class)->only([
        'store', 'destroy'
]);
// 対象のtweetにlike追加 store , 対象のtweetにlike削除 destroy

Route::apiResource('/v1/comment', CommentController::class)->only([
        'store', 'destroy'
]);
// 対象のtweetに対するcommentの表示 ??? これが不明 , 対象のtweetに対するcommentの投稿 , store
// Route::get('/v1/comment', [UserController::class, 'show']);
//  show


Route::get('/v1/user', [UserController::class, 'show']);
// セッション更新時ログイン状態保持時 user_id を取得する show
Route::get('/v1/tweet/target', [TweetController::class, 'show']);
// 対象tweetの表示 show



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
});
